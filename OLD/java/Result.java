public class Results {
	public static void main(String[] args) {
	//build JDBC argument with args[0] as the type to search for and args[1] as the name for searching.
	String query = String.format("SELECT %s FROM tableName WHERE objectName = %s", args[0], args[1]);
        ResultSet rs = stmnt.executeQuery(query);
        String[] results = rs.getArray(0);
        return Arrays.toString(results);
    }
}

