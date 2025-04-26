import java.util.*;

public class Linked_List {
    public static void main(String[] args) {
        LinkedList<Integer> a1 = new LinkedList<>();
        LinkedList<Integer> a2 = new LinkedList<>();
        a2.add(23);
        a2.add(63);
        a2.add(35);

        a1.add(6);
        a1.add(7);
        a1.add(0,6);
        a1.add(0,1);
        a1.addAll(a2);
//        a2.clear();
//        System.out.println( a2.isEmpty());
//        System.out.println(a1.contains(35));
//        System.out.println(a1.indexOf(6));
//        System.out.println(a1.lastIndexOf(6));
//        System.out.println( a1.equals(a2));
//        a1.set(6,78);
//        a1.remove(0);
//        a1.addFirst(7);
//        a1.addLast(47);
//        a1.removeFirst();
//        a1.removeLast();
        for (Integer integer : a1) {
            System.out.print(integer + ", ");
        }
    }
}
