# 08/25/2021 Solving the fauux 2021 ARG

<div class="content" markdown="1">

I was surfing through random websites when I came across one particular neocities page created by the user fauux. 
Entitled [Wired Sound For Wired People](https://fauux.neocities.org/) (flash warning), it's full of weird internet stuff, and more specifically this ARG which I will just be calling 2021.html pt.2

## So Far

Immediately when you get to the 2021 ARG you can see some funny stuff. A couple gifs and a link [2021.html](https://fauux.neocities.org/2021.html) which brings you to a fairly 
inconspicuous page that seems unfinished. Upon closer inspection you find a few interesting things.

The first link sends you to a file called [glOOOOfD.mov](https://fauux.neocities.org/glOOOOfD.mov)

There is a gif in between the links [yJbJK-f2.gif](https://fauux.neocities.org/ylk/yJbJK-f2.gif)

The second link is a pdf file called [yyyyyyY.pdf](https://fauux.neocities.org/yyyyyyY.pdf)

Inspecting the source code you find some commented lines in the head with a link to an audio file [iIIiiiIIIIiiiiIIIIii.wav]

(https://fauux.neocities.org/iIIiiiIIIIiiiiIIIIii.wav)

As well as a funny looking string of characters `+PhVT/ekuoTp5BlA6tgSdassok/PhFChK7et28DsnkA7K0a6GYjaK2KAqNBVMLq9`

The original post has some images that include:

What appears to be just decoration [JJJjjjjdDDD.gif](https://fauux.neocities.org/JJJjjjjdDDD.gif)

An image of someone [whoid.gif](https://fauux.neocities.org/whoid.gif)

Also some files titled [Red](https://fauux.neocities.org/red.mov), [Green](https://fauux.neocities.org/green.mov), [Blue](https://fauux.neocities.org/blue.mov)

As well as a hidden image [kin555.gif](https://fauux.neocities.org/kin555.gif)

## glOOOOfD.mov
This video is just a bunch of lines, and seems to be some random stuff at first. However, after extracting each frame and layering them on top of each other we find this image:

![g10000fD.mov](/public/images/g10000fD.bmp)

I wonder who she is?
Kind of reminds me of one of the gifs from before:

![whoid.gif](https://fauux.neocities.org/whoid.gif)

## yyyyyyY.pdf
This file is a mystery so far. I have not been able to find anything useful from it. Let me know if you do.

## Red, Green, Blue
These three videos also seem to just be random flashing lights as well, but when you extract each frame once again and tile them together you find some images.
They seem to be RGB channels from a single image, and when we stack them on top of each other we end up with this:

![rgb.bmp](/public/images/rgb.bmp)

(The blue channel is only partially complete since there are like 4,000 frames in the blue video and it would take me forever to get them all)

Take note there are some characters in the top right:

`watch?v=b4R7F9mFoaM`

`King of California`

I wonder what this might mean.

## iIIiiiIIIIiiiiIIIIii.wav
<br>
<audio controls>
  <source src="https://fauux.neocities.org/iIIiiiIIIIiiiiIIIIii.wav">
  Your browser does not support this audio.
</audio>

Playing this file we hear that it's some morse code. Translating it to text we get the characters `6234523746396D466F614D` which don't seem to mean anything on their own.
They are actually hex and converting them to ASCII gives us some more random characters `b4R7F9mFoaM`.

## b4R7F9mFoaM
If you're paying attention you'll have noticed that the characters from the planet pictures are similar to the ones from the morse code audio file.
Turns out it's the id for a youtube video:

<iframe width="560" height="315" src="https://www.youtube.com/embed/b4R7F9mFoaM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

I'm not sure if the video itself has any importance as it's in Norwegian, but if we scroll through the comments eventually we find one from a user name King Cali.

![king_cali.jpg](/public/images/king_cali.jpg)

The comment is:

```
what Curious Voice, A random Dutch, 4 Professionals rant: 6 keystones! :)

YouTube is great for information transportation! Sorry for bad English, love from Brazil.
```

Sounds like nonsense, but this is where it gets wild. Taking the first letters of each words in the first line we get:

`wCVArD4Pr6k`

Looks like another youtube video to me and sure enough it is.

## wCVArD4Pr6k
Following the previous link we find this video:

<iframe width="560" height="315" src="https://www.youtube.com/embed/wCVArD4Pr6k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

We found our mystery girl! 
At the time of writing I can't find anyone else online that has managed to find this video before so it makes me excited to figure this out.
The start of this video is also the same as one of the gifs from before.

![yJbJK-f2.gif](https://fauux.neocities.org/ylk/yJbJK-f2.gif)

So just like before we search through the comments for King Cali. Unfortunately, to no avail. What we do find though is another user who commented something very similar to King Cali:

![tobi.jpg](/public/images/tobi.jpg)

The comment is:

```
this is what i was looking for! Picnic Was Delightful = song Two Towers Linger!

Sorry for bad english, love from Spain!
```

This is just what I was looking for as well! :)

Now the same trick from before doesn't work here. I've tried searching for any hidden meaning like before, but I haven't found anything useful.
The comment seems to mention `PWD = sTTL` but searching for sTTL on Google only results in a Wikipedia page about 
[Sit tibi terra levis](https://en.wikipedia.org/wiki/Sit_tibi_terra_levis). Seems cyptic, but I haven't found any use for this yet.

## The Encrypted Strings
I've managed to find two strings that seem to be encrypted with something. Possibly AES256, but I haven't managed to find the secret for either of them. They are:

`+PhVT/ekuoTp5BlA6tgSdassok/PhFChK7et28DsnkA7K0a6GYjaK2KAqNBVMLq9`

`qfNqY79rc0UJtFBMVaOoK7KaISBIDQGiQnjSr46dJzWGmrgUrvQs+n8b/666Dey5`

(the second one is from the hidden image from before)

![kin555.gif](https://fauux.neocities.org/kin555.gif)

</div>