// !*!*!*!* Keyword Search Code Start !*!*!*!*
    // search handles word(s), and also recognizes phrase in double quotes
    if(isset($_GET['search'])) {  // if the user entered any text into the search box
        $search = $_GET['search'];
        $i = strlen($search); // the length of the search word(s)
        // first index is zero, so last index is one less than str len
        $last = $i-1; // index value of last character in string
        $firstChar = substr($search, 0, 1); // returns first char in str
        $lastChar = substr($search, $last); // returns last char in str
        //check to see if the search is a phrase in double quotes
        if($firstChar=='"' && $lastChar=='"') { // if search IS a quoted phrase
            //remove the quotes from around the search string
            $search = str_replace('"', "", $search);
            $query .= " AND (bldgDesc LIKE '%$search%'
                        OR aptDesc LIKE '%$search%'
                        OR aptTitle LIKE '%$search%'
                        OR hoodDesc LIKE '%$search%')";
        } else { // the search is NOT a quoted phrase 
            // "explode" the search string to return an array, one word per index
            $keywordArr = explode(" ", $search);  // explode takes 2 params: the delimiter and the string
            $keywordArrCount = count($keywordArr); // returns how many items are in array
            for($i=0; $i<$keywordArrCount; $i++) {
                //if($i==0) {
                $query .= " AND (bldgDesc LIKE '%$keywordArr[$i]%'
                            OR aptDesc LIKE '%$keywordArr[$i]%'
                            OR aptTitle LIKE '%$keywordArr[$i]%'
                            OR hoodDesc LIKE '%$keywordArr[$i]%')";
            } /// end for loop
        } // end if-else 
    }  // end if isset
    // !*!*!*!* Keyword Search Code End !*!*!*!*
             