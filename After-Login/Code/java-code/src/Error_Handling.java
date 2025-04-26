public class Error_Handling {
    public static void main(String[] args) {
        // Syntax error
        // int a = 5 --> ERROR: No semicolon
        // b = 6; --> ERROR: b is not declared

        // Runtime Errors are called as Exceptions
        int a = 1000;
        int b = 7;
        String text = "I am a going to become a software developer \nThe result is: ";
        try{
            int c = a/b;
            for(int i = 0;i<text.length();i++){
                Thread.sleep(20);
                System.out.print(text.charAt(i));
            }
            System.out.println(c);
        }
        catch (Exception e){
            System.out.println("Can not perform this operation. \nThe reason is: " + e);
        }
    }
}
