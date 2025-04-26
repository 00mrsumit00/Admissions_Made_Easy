public class Finally_Block{
    public static int greet(){
        int a = 50;
        int b = 0;
        try{
            int c = a/b;
            return c;
        }
        catch (Exception e){
            System.out.println(e);
        }
        finally {
            System.out.println("This is finally block");
        }
        return 100;
    }
    public static void main(String[] args) {
        // System.out.println(greet());
        int a = 50;
        int b = 5;
        while(true){
            try{
                System.out.println(a/b);
            }
            catch (Exception e){
                System.out.println(e);
                break;
            }
            finally {
                System.out.println("I am inside finally block");
            }
            b--;
        }
    }
}