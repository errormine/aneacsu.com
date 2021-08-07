--Services
local ProximityPromptService = game:GetService("ProximityPromptService")
local ReplicatedStorage = game:GetService("ReplicatedStorage")

--Values
local Values = ReplicatedStorage:WaitForChild("Values")
local GensOn = Values:WaitForChild("GensOn")

--Generator Class
local Generator = {}
Generator.__index = Generator
Generator.TAG_NAME = "Generator"

--ProxPrompt
local PROMPT_UNFUELED_TEXT = "Refuel"
local PROMPT_FUELED_TEXT = "Turn ON"
local PROMPT_UNFUELED_DURATION = 0
local PROMPT_FUELED_DURATION = 0

--Sound
local FILL_SOUND_ID = "rbxassetid://2347247867"
local RUNNING_SOUND_ID = "rbxassetid://1332496871"

--Events
local fueledEvent = ReplicatedStorage:WaitForChild("FueledEvent")

--Local Functions
local function newSound(parent, name, soundId, looped)
	local newSound = Instance.new("Sound")
	
	newSound.SoundId = soundId
	newSound.Name = name
	newSound.Parent = parent
	newSound.PlaybackSpeed = .8
	newSound.Volume = .5
	newSound.Looped = looped
	
	return newSound
end

local function newProxPrompt(parent, objectText, actionText, holdDuration)
	local newPrompt = Instance.new("ProximityPrompt")
	
	newPrompt.Parent = parent
	newPrompt.RequiresLineOfSight = false
	newPrompt.ObjectText = objectText
	newPrompt.ActionText = actionText
	newPrompt.HoldDuration = holdDuration
	
	return newPrompt
end

--Module Functions
function Generator.new(inst)
	local self = setmetatable({}, Generator)
	
	self.inst = inst
	self.hole = inst.PrimaryPart
	self.fueled = false
	self.running = false
	
	--Proximity Prompt
	self.proxPrompt = newProxPrompt(self.hole, self.inst.Name, PROMPT_UNFUELED_TEXT, PROMPT_UNFUELED_DURATION)
	
	--Sounds
	self.fillSound = newSound(self.hole, "Fill", FILL_SOUND_ID, false)
	self.runSound = newSound(self.hole, "Running", RUNNING_SOUND_ID, true)
	
	--Events
	ProximityPromptService.PromptButtonHoldBegan:Connect(function(...)
		self:PromptButtonHoldBegan(...)
	end)
	
	ProximityPromptService.PromptButtonHoldEnded:Connect(function(...)
		self:PromptButtonHoldEnded(...)
	end)
	
	ProximityPromptService.PromptTriggered:Connect(function(...)
		self:PromptTriggered(...)
	end)
	
	return self
end

function Generator:PromptButtonHoldBegan(prompt, player)
	if prompt == self.proxPrompt and not self.fueled then
		self.fillSound:Play()
	end
end

function Generator:PromptButtonHoldEnded(prompt, player)
	if prompt == self.proxPrompt and not self.fueled then
		self.fillSound:Stop()
	end
end

function Generator:PromptTriggered(prompt, player)
	if player.Character.Humanoid:GetState() ~= Enum.HumanoidStateType.Dead then
		if prompt == self.proxPrompt and not self.fueled then
			self.proxPrompt:Destroy()
			self.fueled = true
			self.inst.Fueled.Value = true

			--Switch to new prompt
			self.proxPrompt = newProxPrompt(self.hole, self.inst.Name, PROMPT_FUELED_TEXT, PROMPT_FUELED_DURATION)

			--Announce that a generator has turned on
			fueledEvent:FireAllClients(self.inst)

			--Remove can from inventory
			local jerryCan = player.Character:FindFirstChild("Jerry Can")

			if jerryCan ~= nil then
				jerryCan.Parent = player.Backpack
			else
				jerryCan = player.Backpack:FindFirstChild("Jerry Can")
			end

			jerryCan:Destroy()
		end

		if prompt == self.proxPrompt and self.fueled then
			if self.running then
				self.proxPrompt.ActionText = "Turn ON"
				self.runSound:Stop()
				self.running = false
				GensOn.Value = GensOn.Value - 1
			else 
				self.proxPrompt.ActionText = "Turn OFF"
				self.runSound:Play()
				self.running = true
				GensOn.Value = GensOn.Value + 1
			end
		end
	end
end

function Generator:GetRunning()
	return self.running
end

return Generator