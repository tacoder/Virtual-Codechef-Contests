<?php require("../../includes/header.php"); ?><h1>Merging Files</h1><div class="content">
<p>In olden days, when primary memory was not as available as it is now, files were stored in external storage devices like tapes, and then two files or their parts were loaded in memory for merging. In merging two sorted files, in the worst case, number of comparisons required equals sum of lengths of the two files. Assume in <b>K</b>-way merging the number of comparisons equals sum of lengths of files to be merged. Given length of a set of files you are required to find order in which these files will have to be merged in minimum number of comparisons.</p>
<h3>Input</h3>
<p>The first line of input is an integer <b>T</b>, denoting the number of test cases. </p>
<p>From the next line, test cases follow. For each case, the first line contains two integers, <b>N</b> and <b>K</b>, representing respectively number of files to be merged and maximum number of files that can be merged at the same time. Next line contains <b>N</b> positive integers representing the length of each file. </p>
<h3>Output</h3>
<p>For each test case, you must print a single line with the test case number and the minimum number of comparisons incurred to merge the files. Please refer to the sample input and output for exact formatting.</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>T</b> &lt;= 50</p>
<p>1 &lt;= <b>N</b> &lt;= 1000</p>
<p>2 &lt;= <b>K</b> &lt;= <b>N</b></p>
<p>The maximum length of a file can be 10^8.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
11 2
3 1 4 5 2 7 6 8 3 9 4
11 3
3 1 4 5 2 7 6 8 3 9 4

<b>Output:</b>
Case 1: 172
Case 2: 110

</pre>
<p><b>
<p>Problem Setter : Dr. M. Kaykobad</p>
<p></p></b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-12-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>