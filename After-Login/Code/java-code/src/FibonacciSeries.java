public class FibonacciSeries {
    public static void main(String[] args) {
        int a = 0, b = 1, c, d = 10;
        System.out.print("The Fibonacci series is: " + a + " " + b + " ");
        for (int i = 1; i <= d; i++) {
            c = a + b;
            System.out.print(c + " ");
            a = b;
            b = c;
        }
    }
}
//    static int fibonacci(int x){
//        if(x == 1 || x == 0){
//            return 1;
//        }
//        return fibonacci(x-1) + fibonacci(x-2);
//    }
//    public static void main(String[] args) {
//        int n = 10;
//        int fib = 0;
//        System.out.print("The fibonacci series is: " + fib + " ");
//        for(int i = 0;i<=n; i++){
//            fib = fibonacci(i);
//            System.out.print(fib + " ");
//        }
