public class VarArgs {
    static int sum(int ...arr){
        int result = 0;
       for(int elements:arr){
           result += elements;
       }
        return result ;
    }
    public static void main(String[] args) {
        System.out.println("The sum of a and b is: " + sum(1,2));
        System.out.println("The sum of a, b and c is: " + sum(1,2,3));
        System.out.println("The sum of a, b, c and d is: " + sum(1,2,3,4));
        System.out.println("The sum of a, b, c, d and e is: " + sum(1,2,3,4,5));
    }
}
