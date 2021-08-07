--------------------------------------------------
--A regular script inside ServerScriptService
--------------------------------------------------
--Services
local ServerStorage = game:GetService("ServerStorage")

--Modules
local Class = require(ServerStorage:WaitForChild("Class")) -- get our class we just made

--Main
local myObject = Class.new(10)  --we create a new object based on our class

print(myObject:GetValue())      --> 10
myObject:SetValue(15)
print(myObject:GetValue())      --> 15