public class Break_Continue {
    public static void main(String[] args) {

        // Break is used to break the loop.
//        for (int i = 0;i<5; i++){
//            System.out.println(i);
//            System.out.println("JAVA is great");
//            if(i==2){
//                System.out.println("End the loop");
//                break;
//            }

            // Continue skips the code witten after continue statement;
            for (int a = 0;a < 5; a++){
                System.out.println(a);
                if (a ==2 ){
                    System.out.println("Continue works");
                    continue;
                }
                System.out.println("JAVA is great");
            }

        }
    }

