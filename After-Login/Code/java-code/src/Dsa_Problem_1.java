public class Dsa_Problem_1 {
    static boolean oddEven(int n){
        boolean even = false;
        if((n % 2) == 0){
            even = true;
        }
        return even;
    }
    public static void main(String[] args) {
        int n = 4;
        int time = 5;
        if (time % ((n - 1) * 2) == 0) {
            System.out.println("Person 1 is holding the pillow");
        }
        else if (time % (n - 1) == 0) {
            System.out.println("Person " + n + " is holding the pillow");
        }
        int check = time / (n - 1);
        for (int i = 1; i < (n-1); i++) {
            if (oddEven(check)) {
                if (time % ((n - 1) * 2) == i) {
                    System.out.println("Person " + (++i) + " is holding the pillow");
                    break;
                }
            }
            else if (time % (n-1) == i){
                System.out.println("Person " + (n-i) + " is holding the pillow");
                break;
            }
        }
    }
}

