<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/blog/include/blog-head.html") ?>
    <title>TEST</title>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/blog/include/blog-header.html") ?>
    <div id="body">
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/blog/include/blog-nav.html") ?>
        <div id="main">
            <section id="JOE">
                <div class="content">
                    <p>Today I will be going over a basic implementation of OOP in Roblox Luau, and how you can use it to simplify your game development.</p>
                    <p>A basic understanding of OOP is assumed, and I will not be explaining every little detail.</p>
                    <h2 class='content-h2'>A metatable class</h2>
                    <p>Lua is not an object-oriented programming language, however, it is possible to create a class system using metatables. Combined with ModuleScripts and CollectionService you can create a very powerful system.</p>
                    <div class='line-numbers code-block'>
                        <pre data-src='/blog/posts/assets/lua_oop/class.lua'><code></code></pre>
                    </div>
                    <p>Here we create an empty table which will represent our class and contain its methods. Inside the constructor we create a new instance, set its metatable, set its values, and return the new instance.</p>
                    <p><em>'A class works as a mold for the creation of objects. Several OO languages offer the concept of class. In such languages, each object is an instance of a specific class. Lua does not have the concept of class; each object defines its own behavior and has a shape of its own. Nevertheless, it is not difficult to emulate classes in Lua, following the lead from prototype-based languages, such as Self and NewtonScript. In those languages, objects have no classes. Instead, each object may have a prototype, which is a regular object where the first object looks up any operation that it does not know about. To represent a class in such languages, we simply create an object to be used exclusively as a prototype for other objects (its instances). Both classes and prototypes work as a place to put behavior to be shared by several objects.'</em></p>
                    <p><a href='https://www.lua.org/pil/16.1.html' title='Programming in Lua: 16.1 – Classes'>[further reading]</a></p>
                    <p>Well, what can you do with that?</p>
                    <div class='line-numbers code-block'>
                        <pre data-src='/blog/posts/assets/lua_oop/class_use.server.lua'><code></code></pre>
                    </div>
                    <p>In a server script we can get our module script and create a new object from our class, and we can call those functions in the class. This lets us store values for an object in code rather than in Value objects in the game world.</p>
                    <p>This is great, but that are still some improvements we can make: </p>
                    <div class='line-numbers code-block'>
                        <pre data-src='/blog/posts/assets/lua_oop/class_improved.lua'><code></code></pre>
                    </div>
                    <p>Here we use the _call metamethod to add some functionality that allows us to create a new instance without having to type Class.new() every time.</p>
                    <p>'There is a metamethod called __call, which defines the bevahiour of the object upon being used as a function, e.g. object(). This can be used to create function objects.'</p>
                    <p><a href='https://riptutorial.com/lua/example/8060/make-tables-callable'>[further reading]</a></p>
                    <div class='line-numbers code-block'>
                        <pre data-src='/blog/posts/assets/lua_oop/class_improved_use.server.lua'><code></code></pre>
                    </div>
                    <p>Luau has many different metamethods that can be used for many things, but this is the most advanced that we will get.</p>
                    <p>A list of all metamethods available in Roblox can be found here: <a href='https://developer.roblox.com/en-us/articles/Metatables#metamethods'>[Metatables]</a> </p>
                    <h2 class='content-h2'>Practical example</h2>
                    <p>Now this is great if you are just writing a program in Lua, however, I assume most people reading this will be trying to use this kind of system when creating Roblox games. So here I will go over how you can create a door using this basic class system.</p>
                    <p>Before anything we will create a door in Roblox studio and give it a tag of 'Door'.</p>
                    <div class='large-img'>
                        <img src='/blog/posts/assets/lua_oop/images/roblox_door01.jpg'/><br>
                        <a href='/blog/posts/assets/lua_oop/images/roblox_door01.jpg' class='img-view-link'>view full size</a>
                    </div>
                    <p>In this part we will go over how this can be used in conjuction with CollectionService to objects that are linked to the instances in your game.</p>
                    <p>This example is taken from the CollectionService page on the developer hub, but it is slightly modified.</p>
                    <div class='line-numbers code-block'>
                        <pre data-src='/blog/posts/assets/lua_oop/door.lua'><code></code></pre>
                    </div>
                    <p>Now that we have a class for our doors, we need to create a manager class that will keep track of all the doors in the game for us.</p>
                    <div class='line-numbers code-block'>
                        <pre data-src='/blog/posts/assets/lua_oop/classManager.lua'><code></code></pre>
                    </div>
                    <p>Here I have created a generic class manager that can be used with any classes that we create like this.</p>
                    <div class='line-numbers code-block'>
                        <pre data-src='/blog/posts/assets/lua_oop/doorServerScript.server.lua'><code></code></pre>
                    </div>
                    <p>Finally, we can initialize the door manager in a server script and we now have a system that keeps track of every door in the game for us, and each door has the same functionality! All in a few scripts.</p>
                    <p>In game we can see the door manager working and that each door works as intended:</p>
                    <div class='large-img'>
                        <video src='/blog/posts/assets/lua_oop/videos/roblox_door01.mp4' controls></video>
                    </div>
                    <p>That is all! This might not be the best way to implement OOP in Lua, but it's one method that I've found works decently. I hope it will be useful to you, and I will try to add more examples in the future.</p>
                    <p>Thank you for reading!</p>
                </div>
            </section>
        </div>
    </div>
</body>
</html>