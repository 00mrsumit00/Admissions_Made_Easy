class NegativeRadiusException extends Exception{
    @Override
    public String toString(){
        return "Radius cannot be Negative";
    }
    @Override
    public String getMessage(){
        return "Radius cannot be Negative";
    }
}
public class Throw_Throws {
    public static double area(int r) throws NegativeRadiusException{
        if(r<0) {
            throw new NegativeRadiusException();
        }
        double result = Math.PI * r * r;
        return result;
    }
    public static int divide(int a, int b) throws ArithmeticException{
        int result = a/b;
        return result;
    }
    public static void main(String[] args) {
//        try {
//            int c = divide(6, 2);
//            System.out.println("The Result = " + c);
//        }
//        catch (ArithmeticException e){
//            System.out.println("An Exception occurred\n"+e);
//        }
        try {
            double ar = area(-6);
            System.out.println("The Area = " + ar);
        }
        catch (NegativeRadiusException e){
            System.out.println(e);
        }
    }
}
