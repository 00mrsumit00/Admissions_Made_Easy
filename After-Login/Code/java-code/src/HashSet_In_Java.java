import java.util.HashSet;

public class HashSet_In_Java {
    public static void main(String[] args) {
        HashSet<Integer> MyHash = new HashSet<>();
        HashSet<Integer> MyHash2 = new HashSet<>();
        MyHash2.add(56);
        MyHash2.add(36);
        MyHash2.add(57);

        MyHash.add(78);
        MyHash.add(53);
        MyHash.add(83);
        MyHash.addAll(MyHash2);
        System.out.println(MyHash);
        System.out.println(MyHash2);
    }
}
