--------------------------------------------------
--This is inside a ModuleScript inside ServerStorage
--------------------------------------------------
local Class = {} 
Class.__index = Class

--Use the __call metamethod to create a new instance whenever the class is called like a function
setmetatable(Class, {
    __call = function(cls, ...)
        return cls.new(...)
    end
})

--Constructor for creating new objects based on this class
function Class.new(value)
  local self = setmetatable({}, Class)

  self._value = value

  return self
end

function Class:SetValue(value)
  self._value = value
end

function Class:GetValue()
  return self._value
end

return Class