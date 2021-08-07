------------------------------------------------------------------------------
-- In this section we want to create the manager object and have it listen for
-- our doors. 
------------------------------------------------------------------------------
local ServerStorage = game:GetService("ServerStorage")

local ClassManager = require(ServerStorage:WaitForChild("ClassManager"))
local Door = require(ServerStorage:WaitForChild("Door"))

local doorManager = ClassManager(Door)
print(doorManager:GetObjects())