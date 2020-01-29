package com.company;
import java.util.*;

public class Main {

    public static void main(String[] args) {
        int[]nums = new int[]{3, 2, 4};
        new Main().twoSum(nums, 6);
    }

    public int[] twoSum(int[] nums, int target) {
        Map<Integer, Integer> map = new HashMap<>();
        for (int i = 0; i < nums.length; i++) {
            int complement = target - nums[i];
            if (map.containsKey(complement)) {
                return new int[] { map.get(complement), i };
            }

            map.put(nums[i], i);
        }

        throw new IllegalArgumentException("No two sum solution");
    }
}
