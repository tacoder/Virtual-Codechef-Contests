<?php require("../../includes/header.php"); ?><h1>Problem1</h1><div class="content">

<h1>Number Mutations</h1>
<pre>Given a number, we can form number mutations in the following ways

   1. The digits of the number should be arranged in descending order
   2. The digits of the number should be arranged in ascending order
   3. The number obtained in (2) must be subtracted from the number obtained  in (1) to form a new number
   4. Repeat these steps unless the new number has already appeared in a mutation 

Note that 0 is a permitted digit. The length of the mutation is the number of distinct numbers in the mutation. The program should read the numbers as input and should output the length of that mutation for each number read as an input.
</pre><h3>Input</h3>
<p>A sequence of positive numbers, all less than 10^9, each on its own line, terminated by 0, is the input. The input file contains at most 10 numbers.</p>
<h3>Output</h3>
<p>The output consists of their lengths exactly in the format indicated below.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
123456789
1234
444
0


<b>Output:</b>
2
4
2

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xpurgate">xpurgate</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-09-2010</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>