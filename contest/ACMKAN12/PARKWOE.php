<?php require("../../includes/header.php"); ?><h1>Parking Woes</h1><div class="content">

<p style="text-align:justify">
There is a new mall in the city and customers have one floor of parking available in its basement. The parking lot consists of m rows of n parking slots each. When owners come back  where (s)he has parked his/her car they may have to examine mXn cars in the worst case to find the car.</p>
<p style="text-align:justify">In order to attract customers, the mall has decided to ease this trouble by hiring a new parking lot attendant to park the cars. The diligent attendant has thought of the following scheme to park the cars. The license number of each vehicle is a positive number. License numbers are unique to a car - no two cars have the same number. The attendant has decided that for ease of locating a car, he will keep each row and each column sorted in ascending order of license numbers.</p>
<p style="text-align:justify">Imagine the columns as being arranged from west to east and the rows being arranged north to south. Any unused slot in a row or column will be present only at the end - that is, once an empty slot is encountered on a row, there will be no car to the east of the slot on the same row, and once an empty slot is encountered on a column, there will be no car to the south of the slot on that column. Let's call such a lot as an "ordered lot".</p>
<p style="text-align:justify">Once he has thought of this scheme, he has to design various operations to maintain the order once cars are removed. We wish him well with his grand scheme, but we will assist him only in the simplest operation - that of removing the car with the smallest license number. This operation is performed on an already ordered lot.</p>
<p style="text-align:justify">If we remove any car creating an empty slot, we can fill that empty slot by moving the car immediately to its east, or immediately south, to the empty slot. The attendant has to do this until the parking lot becomes an "ordered lot", once again. You have to help him by computing the least number of cars that he has to move, after removing the smallest numbered car, such that the lot becomes ordered.</p>
<h3>Input</h3>
<p style="text-align:justify">The input consists of several lines. The first line is a number saying how many distinct parking lots are present in the input. </p>
<p style="text-align:justify">This is followed by a set of inputs, each representing an ordered parking lot. Each lot starts with a line containing two numbers m and n, separated by a blank space where the first number m is  the number of rows and the second one, n, is the number of columns in that lot. This is followed by m rows of n columns of numbers, each representing a license number. Empty slots will be represented by the number 2147483647.</p>
<h3>Output</h3>
<p style="text-align:justify">The output should consist of several line, each containing a number. Each line i corresponds to a parking lot i in the input. The output number for a lot should be the minimum number of cars that the attendant should move once the car with the minimum license number is removed, to maintain an ordered lot.</p>
<h3>Sample Input</h3>
<pre>
2
3 3
1 2 3
4 5 6
7 8 9
4 2
1 2
3 2147483647
4 2147483647
2147483647 2147483647

</pre><h3>Sample Output</h3>
<pre>
4
1

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shilp_adm">shilp_adm</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-11-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>