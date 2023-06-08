---
layout: blog-post
title: "Stylized Water Shader Godot 4.0"
---

After looking through several different water shader tutorials I couldn't find one I was totally satisfied with so I made my own based on all the ones I saw!

I will do a full write up on how it works eventually (probably... maybe).

## Video example

<iframe width="560" height="315" src="https://www.youtube.com/embed/M4o9G-rhFVA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

## Download

Here is the shader material that you should be able to drag and drop into your project: [water_material.tres](/assets/files/water_material.tres)

## Code

Here is the shader code for anyone interested:

```
shader_type spatial;

uniform sampler2D DEPTH_TEXTURE : hint_depth_texture, repeat_disable, filter_nearest; 

uniform float depth_fade_distance : hint_range(0.0, 10.0) = 1.0;
uniform float absorbance : hint_range(0.0, 10.0) = 2.0;

uniform vec3 shallow_color : source_color = vec3(0.22, 0.66, 1.0);
uniform vec3 deep_color : source_color = vec3(0.0, 0.25, 0.45);

uniform float foam_amount : hint_range(0.0, 2.0) = 0.2;
uniform vec3 foam_color : source_color = vec3(1);
uniform sampler2D foam_noise : hint_default_white;

uniform float roughness : hint_range(0.0, 1.0) = 0.05;

uniform sampler2D wave_texture;
uniform float wave_scale = 4.0;
uniform float height_scale = 0.15;
varying float wave_height;
varying vec3 uv_world_pos;

uniform sampler2D normal1;
uniform vec2 wave_dir1 = vec2(1.0, 0.0);
uniform sampler2D normal2;
uniform vec2 wave_dir2 = vec2(0.0, 1.0);
uniform float wave_speed : hint_range(0.0, 0.2) = 0.015;

vec3 screen(vec3 base, vec3 blend){
	return 1.0 - (1.0 - base) * (1.0 - blend);
}

void vertex() {
	// Vertext displacement for waves
	uv_world_pos = (MODEL_MATRIX * vec4(VERTEX, 1.0)).xyz;
	wave_height = texture(wave_texture, uv_world_pos.xz / wave_scale + TIME * wave_speed).r;
	VERTEX.y += wave_height * height_scale;
}

void fragment()
{
	// Depth texture magic
	float depth = texture(DEPTH_TEXTURE, SCREEN_UV, 0.0).r;
  	vec3 ndc = vec3(SCREEN_UV * 2.0 - 1.0, depth);
	vec4 world = INV_VIEW_MATRIX * INV_PROJECTION_MATRIX * vec4(ndc, 1.0);
	float depth_texture_y = world.y / world.w;
	float vertex_y = (INV_VIEW_MATRIX * vec4(VERTEX, 1.0)).y;
	float vertical_depth = vertex_y - depth_texture_y;
	
	// Changes the color of geometry behind it as the water gets deeper
	float depth_fade_blend = exp(-vertical_depth / depth_fade_distance);
	depth_fade_blend = clamp(depth_fade_blend, 0.0, 1.0);
	
	// Makes the water more transparent as it gets more shallow
	float alpha_blend = -vertical_depth * absorbance;
	alpha_blend = clamp(1.0 - exp(alpha_blend), 0.0, 1.0);
	
	// Small layer of foam
	float foam_blend = clamp(1.0 - (vertical_depth / foam_amount), 0.0, 1.0);
	vec3 foam = foam_blend * foam_color;
	
	// Mix them all together
	vec3 color_out = mix(deep_color, shallow_color, depth_fade_blend);
	color_out = screen(color_out, foam);
	
	// Normal maps
	vec2 normal_offset1 = (TIME * wave_dir1) * wave_speed;
	vec2 normal_offset2 = (TIME * wave_dir2) * wave_speed;
	vec3 normal_blend = mix(texture(normal1, uv_world_pos.xz / wave_scale + normal_offset1), texture(normal2, uv_world_pos.xz / wave_scale + normal_offset2), 0.5).rgb;
	
	ALBEDO = color_out;
	ALPHA = alpha_blend;
	ROUGHNESS = roughness;
	NORMAL_MAP = normal_blend;
}
```
