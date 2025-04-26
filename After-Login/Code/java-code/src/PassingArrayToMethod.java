public class PassingArrayToMethod {
    static int change(int x){
        x = 98;
        return x;
    }
    static int change2(int [] x){
        x [0]= 99;
        return x[0];
    }
    public static void main(String[] args) {
        int a = 52;
        change(a);
        // This_Keyword does not change value of a
        System.out.println("The value of a: " + a);

        int [] marks = {98,67,98,56,78};
        change2(marks);
        /* This_Keyword changes the value of array element
           because array passes the reference of elements to the method */
        System.out.println("The value of element after changing is: " + marks[0]);
    }
}
