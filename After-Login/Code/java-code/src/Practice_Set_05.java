public class Practice_Set_05 {
    public static void main(String[] args) {

        // Question 1: Print star patterns
//        for(int i = 5;i>=1;i--) {
//            for (int j = 0; j < i; j++) {
//                System.out.print("*");
//            }
//            System.out.print("\n");
//        }
//        for(int a = 1;a<5;a++){
//            for(int b = 0;b<a;b++){
//                System.out.print("*");
//            }
//            System.out.print("\n");
//        }

        // Question 2:WAP to print sum of first 10 even numbers;
//        int sum = 0;
//        int n = 10;
//        for(int i = 0;i<n;i++){
//           sum = sum + (2*i);
//        }
//        System.out.println("The sum of first 4 even numbers is: " + sum);

        // Question 3: WAP to print a table of 5
//        int n = 5;
//        for(int i = 1;i<=10;i++){
//            System.out.printf("%d X %d = %d\n",n,i,n*i);
//        }

        // Question 4: WAP to print table of 10 in reverse order
//        int n = 10;
//        for(int i =10;i>0;i--){
//            System.out.printf("%d X %d = %d\n",n,i,n*i);
//        }

        // Question 5:WAP to print factorial of given number
//        int n = 6;
//        int factorial=1;
//        for(int i=1;i<=n;i++) {
//            factorial = factorial * i;
//        }
//            System.out.println("Factorial of 6 is: " + factorial);

        // Question 6:WAP to print factorial of given number using while loop.
//        int n = 5;
//        int i = 1;
//        int factorial = 1;
//        while(i<=n){
//            factorial = factorial * i;
//            i++;
//        }
//        System.out.println("The factorial of 5 is: " + factorial);

        // Question 7:RepeatQuestion 1 using while loop
//       int i = 5;
//       while(i>=1){
//           int j = 0;
//           while(j<i){
//               System.out.print("*");
//               j++;
//           }
//           System.out.print("\n");
//            i--;
//       }

        // Question 9:SUm of numbers in table of 8;
//        int sum = 0 ;
//        for(int i = 1;i<=10;i++){
//            int table = 8 * i;
//            sum += table ;
//        }
//        System.out.println(sum);

        // Question 11:  Q2 using while loop
        int n = 5;
        int i = 0;
        int sum = 0;
        while(i<n){
            sum += 2*i;
            i++;
        }
        System.out.println(sum);
    }
}
