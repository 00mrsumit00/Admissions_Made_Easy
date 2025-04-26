public class Practice_Set_07 {
    static void starPattern(){
        for(int i = 1;i < 5;i++){
            for(int j = 0;j<i;j++){
                System.out.print("*");
            }
            System.out.println();
        }
    }
    static int sumRec(int n) {
        if (n == 1) {
            return 1;
        }
        return n + sumRec(n - 1);
    }
    static void starPattern2(){
        for(int i = 5;i>=1;i--){
            for(int j = 0;j<i;j++){
                System.out.print("*");
            }
            System.out.println();
        }
    }
    static int fibonacci(int n){
        if(n == 1 || n == 2){
            return n-1;
        }
        return fibonacci(n-2) + fibonacci(n-1);
    }
    static float converter(float x) {
        float y;
        y = x * 9 / 5 + 32;
        return y;
    }

    static int itrSum(int n){
        int sum = 0;
        for(int i = 1;i <=n;i++){
            sum += i;
        }
        return sum;
    }
    static void starPattern3(int x) {
        if (x > 0) {
            starPattern3(x-1);
            for (int i = 0; i < x; i++) {
                System.out.print("*");
            }
            System.out.println();
        }
    }
    static void starPattern4(int n){
        if(n > 0){
            for(int i = 0; i < n;i++){
                System.out.print("*");
            }
            System.out.println();
            starPattern4(n-1);
        }
    }
    public static void main(String[] args) {
        // Q1:print a star pattern
        // starPattern();
        // Practice_Set_07 obj = new Practice_Set_07();

        // Q2: Addition of n natural numbers with recursive function
        // int c = sumRec(5);
        // System.out.println(c);

        // Q3: Print a star pattern
        // starPattern2();

        // Q4: WAP to know nth term of fibonacci series
        // int nth = fibonacci(5);
        // System.out.println(nth);

         // Q5: Star pattern using recursion
         starPattern3(5);

        // Q6: Celsius to Fahrenheit conversion
        // float tempInCelsius = 24;
        // float tempInFahrenheit = converter(tempInCelsius);
        // System.out.println(tempInCelsius + "C = " + tempInFahrenheit + "F");

        // Q7: Sum of n natural numbers
        // int num = 5;
        // int sum = itrSum(num);
        // System.out.println(sum);

        // Q8: Star pattern using recursion
        starPattern4(5);
    }
}
