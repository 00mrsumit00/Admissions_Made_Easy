public class Dsa_Problem_2 {
    public static void main(String[] args) {
        int [] nums = {8,6,4,9,12,13};
        int target = 100;
        int sum = 0;
        for(int i = 0;i< nums.length-1;i++){
            for(int j = 1;j< nums.length;j++) {
                if(i<j) {
                    sum = nums[i] + nums[j];
                }
                if (sum == target) {
                    System.out.print(i + ", ");
                    System.out.println(j);
                    break;
                }
            }
            if (sum == target) {
                break;
            }
        }
    }
}
