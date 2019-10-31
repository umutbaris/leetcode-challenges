var searchRange = function(nums, target) {
    let targets = [];
  
    for(let i=0; i<= nums.length-1; i++){
      if(target === nums[i]){
            targets.push(i);
          }
    }
  
    let first = targets[0] !== undefined ? targets[0] : -1
    let last = targets.slice(-1)[0] !== undefined ? targets.slice(-1)[0] : -1

      return [first, last];
  
  };
  
  searchRange([1], 1);