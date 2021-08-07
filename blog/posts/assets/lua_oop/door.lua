------------------------------------------------------------------------------
-- In this section of the script, we define a Door class.
-- This is placed in its own ModuleScript.
------------------------------------------------------------------------------
local Door = {}
-- public variables
Door.__index = Door
Door.TAG_NAME = "Door"
Door.OPEN_TIME = 2

setmetatable(Door, {
	__call = function(cls, ...)
		return cls.new(...)
	end
})

function Door.new(inst)
	-- Setting the metatable allows the table to access
	-- the SetOpen, OnTouch and Cleanup methods even if we did not
	-- add all of the functions ourself - this is because the
	-- __index metamethod is set in the Door metatable.
	local self = setmetatable({}, Door)

	-- Keep track of some door properties of our own
	self._inst = inst -- inst is our actual door instance in the game
	self._debounce = false
	self._isOpen = false

	-- Initialize a Touched event to call a method of the door
	inst.Touched:Connect(function(part)
		if not self._debounce then
			local humanoid = part.Parent:FindFirstChild("Humanoid")

			if humanoid then
				self._debounce = true
				self:SetOpen(true)
				wait(Door.OPEN_TIME)
				self:SetOpen(false)
				self._debounce = false
			end
		end
	end)
	
	self:SetOpen(false)

	return self
end

-- Miscellaneous public functions
function Door:SetOpen(isOpen)
	if isOpen then
		-- open the door
		self._isOpen = isOpen
		self._inst.Transparency = .75
		self._inst.CanCollide = false
	else
		-- close the door
		self._isOpen = isOpen
		self._inst.Transparency = 0
		self._inst.CanCollide = true
	end
end

function Door:GetOpen()
	return self._isOpen
end

return Door