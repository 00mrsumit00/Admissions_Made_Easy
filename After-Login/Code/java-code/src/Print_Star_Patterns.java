public class Print_Star_Patterns {
    public static void main(String[] args) {
        for(int i = 5;i>1;i--){
            for(int j = 0;j<i;j++){
                System.out.print("*");
            }
            System.out.print("\n");
        }
        for(int a = 1;a<5;a++){
            for(int b = 0;b<a;b++){
                System.out.print("*");
            }
            System.out.print("\n");
        }
    }
}
