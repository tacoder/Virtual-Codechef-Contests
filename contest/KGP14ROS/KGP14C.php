<?php require("../../includes/header.php"); ?><h1>Kings Dinner</h1><div class="content">
<p>The King of Neverland plans to host a Christmas dinner for all the <b>K</b> landlords (numbered from 1 to <b>K</b>) in the kingdom. The landlords are feudal and the king feels it might be good to get them all together under one roof. However, he knows many of them really hate each other and seating them in the same dinner table may cause immediate problems. Luckily, he has two dinner tables in his banquet hall, and he sets out to see if he can sit all of them while making sure that two landlords who hate each other are not seated at the same table. He will hold the dinner only if this is possible. You need to help him decide whether he can invite the landlords or not given the above constraint. Also, if he can invite them, you need to help him find the number of people to be seated at each table. Note that the number of people to be seated at each table may not be unique, in which case, you need to find any one possible way. It is known that every landlord hates at least one other landlord, and if landlord u hates landlord v, then landlord v also hates landlord <i>u</i>.</p>
<h3>Input</h3>
<p>The first line contains the number of test cases <b>N</b> (0 &lt; <b>N</b> ≤ 3).</p>
<p>For each test case, the first line contains the number of landlords <b>K</b> (0 &lt; <b>K</b> ≤ 500). This is followed by <b>K</b> lines, where the j-th line contains the information about all the landlords that landlord j hates in the following format: the first integer <b>P</b> ( &gt; 0) in the line contains the number of landlords that landlord j hates, followed by <b>P</b> integers in the same line giving the id of the landlords that landlord j hates. Note that since landlord u hates landlord <i>v</i> implies that landlord v also hates landlord <i>u</i>, therefore if landlord <i>v</i> appears in landlord <i>u</i>’s list in the input, then landlord u appears in landlord <i>v</i>’s list in the input.</p>
<h3>Output</h3>
<p>For each test case, print the case number, followed by a colon, followed by a single space, followed by 3 integers, separated by single space. The first integer is 0 if the landlords cannot be invited, and 1 if they can be invited. If the first integer is 0, the second and the third integers must both be 0. If the first integer is 1, then the second and the third integer show the number of landlords to be seated in the two tables, with the smaller number as the second integer and the larger as the third integer.</p>
<h3>Sample Input</h3>
<pre>
3 
4 
2 2 4 
2 1 3 
2 2 4 
2 1 3 
9 
1 2 
3 1 3 4 
2 2 5 
1 2 
1 3 
3 7 8 9 
1 6 
1 6 
1 6 
5 
3 2 3 5 
3 1 3 4 
4 1 2 4 5 
2 2 3 
2 1 3
</pre><h3>Sample Output</h3>
<pre>
Case 1: 1 2 2 
Case 2: 1 4 5 
Case 3: 0 0 0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-12-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>