---
layout: blog-post
title: "Stylized Water Shader Godot 4.0"
---

After looking through several different water shader tutorials I couldn't find one I was totally satisfied with so I made my own based on all the ones I saw!

Much of it is based on this shader for Unity that I tried to recreate in Godot: [Stylized Water Shader](https://alexanderameye.github.io/notes/stylized-water-shader/)

## Video example

 <video autoplay loop muted>
  <source src="/assets/videos/water-shader.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video> 

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

uniform float roughness : hint_range(0.0, 1.0) = 0.1;

uniform sampler2D wave_texture;
uniform float wave_height = 0.15;
varying vec2 uv_world;

uniform sampler2D normal_texture;
uniform float normal_scale = 8.0;
uniform float wave_direction : hint_range(0, 1, 0.05) = 1.0;
uniform float wave_speed : hint_range(0, 1) = 0.15;

vec3 screen(vec3 base, vec3 blend){
	return 1.0 - (1.0 - base) * (1.0 - blend);
}

vec2 panning_uv(vec2 uv, float tiling) {
	float offset = wave_direction * 2.0 - 1.0;
	vec2 uv_offset = vec2(cos(offset * PI), sin(offset * PI));
	uv_offset = normalize(uv_offset) * TIME * (wave_speed / 10.0);
	
	return uv * (1.0 / tiling) + uv_offset;
}

void vertex() {
	// Vertex displacement for waves
	uv_world = (MODEL_MATRIX * vec4(VERTEX, 1.0)).xz;
	VERTEX.y += texture(wave_texture, panning_uv(uv_world, normal_scale)).x * wave_height;
}

void fragment()
{
	// Depth texture from https://github.com/godotengine/godot/issues/77798#issuecomment-1575222421
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
	vec4 wave_normal1 = texture(normal_texture, panning_uv(uv_world, normal_scale));
	vec4 wave_normal2 = texture(normal_texture, panning_uv(uv_world, -normal_scale));
	vec3 normal_blend = mix(wave_normal1, wave_normal2, 0.5).rgb;
	
	ALBEDO = color_out;
	ALPHA = alpha_blend;
	ROUGHNESS = roughness;
	NORMAL_MAP = normal_blend;
}
```
{: .language-glsl}
