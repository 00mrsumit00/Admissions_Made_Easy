public class RecursionFactorial {
    static int factorial(int x){
        if(x == 1 || x== 0 ){
            return 1;
        }
        return x * factorial(x-1);
    }
    static int factorial_itrative(int x){
        if(x<=1){
            return 1;
        }
        int fac = 1;
        for (int i = 1;i <= x;i++){
            fac *= i;
        }
        return fac;
    }
    public static void main(String[] args) {
        int n = 5;
        System.out.println("The factorial of n is: " + factorial(n));
        System.out.println("The factorial of n is: " + factorial_itrative(n));
    }
}
