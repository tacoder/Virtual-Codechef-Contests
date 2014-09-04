<?php require("../../includes/header.php"); ?><h1>Recycling</h1><div class="content">

<p><html><br />
<body></body></html></p>
<h3>Background</h3>
<p>
Recycling glass requires that the glass be separated by color into one of three categories: brown glass, green glass, and clear glass. In this problem you will be given three recycling garbage bins, each containing a specified number of brown, green and clear bottles. In order to be recycled, the bottles will need to be moved so that each bin contains bottles of only one color.<br />
The problem is to separate different bottles in minimum number of moves or minimize the number of movements between boxes.<br />
For the purposes of this problem, each garbage bin has infinite capacity and the only constraint is moving the bottles so that each bin contains bottles of a single color. The total number of bottles will never exceed 2^31.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer T denoting the number of test cases.<br />
Followed of a series of lines with each line containing 9 integers. The first three integers on a line represent the number of brown, green, and clear bottles (respectively) in garbage bin number 1, the second three represent the number of brown, green and clear bottles (respectively) in garbage bin number 2, and the last three integers represent the number of brown, green, and clear bottles (respectively) in garbage  bin number 3. For example, the line 10 15 25 30 13 8 19 8 31<br />
indicates that there are 25 clear bottles in garbage bin 1, 13 green bottles in garbage bin 2, and 19 brown bottles in garbage bin 3.
</p>
<h3>Output</h3>
<p>
For each line of input there will be one line of output indicating what color bottles go in what garbage bin to minimize the number of bottle movements. You should also print the minimum number of bottle movements.<br />
The output should consist of a string of the three upper case characters 'G', 'B', 'C' (representing the colors green, brown, and clear) representing the color associated with each garbage bin.<br />
The first character of the string represents the color associated with the first garbage bin, the second character of the string represents the color associated with the second garbage bin, and the third character represents the color associated with the third garbage bin.<br />
The integer indicating the minimum number of bottle movements should follow the string.<br />
If more than one order of brown, green, and clear garbage bins yields the minimum number of movements then the alphabetically first string representing a minimal configuration should be printed.
</p>
<h3>Constraints</h3>
<p>
Test cases(1 = T =20)<br/><br />
Total number of bottles = 2^31<br />
</br/></p>
<h3>Sample Input</h3>
<pre>
2
1 2 3 4 5 6 7 8 9 <br/>
5 10 5 20 10 5 10 20 10
</br/></pre><h3>Sample Output
<pre>
BCG 30<br/>
CBG 50
</br/></pre><p>

</p>
</h3>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/opengeest">opengeest</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2.013 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>5000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>