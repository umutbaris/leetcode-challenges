/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number[]}
 */
var searchRange = function(nums, target) {
    tarStart = -1;
    tarend = -1;
    for(let i=0;i<nums.length;i++){
        if(nums[i]==target){
            if(tarStart == -1){
                tarStart = i;
                tarend = i;
            }else{
                tarend++;
            }
        }
    }
    return [tarStart,tarend];
};