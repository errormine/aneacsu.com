------------------------------------------------------------------------------
-- In this section of the script, we want to listen for instances with a
-- specific tag. When we find one, create a new object and keep track of it.
-- When the instance is destroyed then destroy the code object.
------------------------------------------------------------------------------
local CollectionService = game:GetService("CollectionService")

local ClassManager = {}
ClassManager.__index = ClassManager

setmetatable(ClassManager, {
	__call = function(cls, ...)
		return cls.new(...)
	end
})

function ClassManager.new(class)
	local self = setmetatable({}, ClassManager)

	self._class = class
	self._objects = {}

	-- Private functions
	local function onInstanceAdded(inst)
		self._objects[inst] = class(inst)
	end

	-- Events
	-- Get when a new instance with the specific tag is created.
	CollectionService:GetInstanceAddedSignal(class.TAG_NAME):Connect(function(inst)
		onInstanceAdded(inst)
	end)

	-- Get when an instance with the specific tag is destroyed.
	CollectionService:GetInstanceRemovedSignal(class.TAG_NAME):Connect(function(inst)
		self._objects[inst] = nil
	end)

	-- Listen for existing tags, tag additions and tag removals for the door tag 
	for _, inst in pairs(CollectionService:GetTagged(class.TAG_NAME)) do
		onInstanceAdded(inst)
	end

	return self
end

function ClassManager:GetObjects()
	return self._objects
end

return ClassManager