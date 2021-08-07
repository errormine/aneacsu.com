--------------------------------------------------
--Inside a server script
--------------------------------------------------
local ServerStorage = game:GetService("ServerStorage")

--Modules
local Class = require(ServerStorage:WaitForChild("Class")) -- get our class we just made

--Main
local myObject = Class(10)  --because of the __call metamethod we can now create an object like this

print(myObject:GetValue())      --> 10
myObject:SetValue(15)
print(myObject:GetValue())      --> 15