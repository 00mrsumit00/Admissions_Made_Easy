import java.util.Scanner;
class MyEx extends Exception{
    public String toString(){
        return "Don't enter zero";
    }
    public String getMessage(){
        return "Do not enter zero";
    }
}
public class Tp{
    public static int divide(int a, int b) throws MyEx{
        return a/b;
    }
    public static void main(String[] args) {
        int a = 8;
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter a number: ");
        int b = sc.nextInt();
//        if(b == 0) {
//            try {
//                throw new MyEx();
//            }
//            catch (Exception e) {
//                e.printStackTrace();
//                System.out.println(e);
//                System.out.println(e.getMessage());
//            }
//        }
        try{
            divide(a,b);
        }
        catch (Exception e){
            System.out.println(e);
        }
    }
}