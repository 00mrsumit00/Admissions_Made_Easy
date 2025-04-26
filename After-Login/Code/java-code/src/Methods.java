public class Methods {
     static int sum(int x , int y){
        int z = x + y;
        return z;
    }
    int sub(int x,int y){
         int z = x - y;
         return z;
    }
    public static void main(String[] args) {
        int a = 8;
        int b = 6;
        int c = sum(a,b);
        System.out.println("The sum of a and b is: " + c);

        Methods obj = new Methods();
        int a1 = 16;
        int b1 = 12;
        int c1 = obj.sub(a1,b1);
        System.out.println("the subtraction of a1 and b1 is: " + c1);
    }
}