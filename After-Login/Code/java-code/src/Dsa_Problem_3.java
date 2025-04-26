public class Dsa_Problem_3 {
    public static void main(String[] args) {
        int[] nums = {2,7,11,15};
        int target = 12;
        for(int i = 0;i< nums.length;i++){
            if(nums[i] + nums[i+1] == target){
                System.out.print(i + ", ");
                System.out.println(i + 1);
                break;
            }
        }
    }
}
