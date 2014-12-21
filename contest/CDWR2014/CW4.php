<?php require("../../includes/header.php"); ?><h1>CODERS RANKING</h1><div class="content">

<p> Venkatesh the coder has come up with an idea to rank his fellow coders. His idea is to use the first name of the coders and rank them according to his own ranking algorithm.</p>
<p> Suppose the first name of some coder is "duk"(Venkatesh does not like capital letters). Venkatesh then wrote all permutations of the letters of "duk" in descending order.<br />
<br /> ukd, udk, kud, kdu, duk, dku.<br />
<br /> Now he numbers each permutation serially from 1. The serial number alloted to "duk" is his rank. Here "duk" gets a number "5" according to this algorithm.<br />
<br /> However, the job is not done. Venkatesh needs to enter the details of this coder in an excel sheet in the column corresponding to this number. Columns in an excel<br />
<br /> sheet are numbered alphabetically (in upper-case) as A,B,C,D.....Z,AA,AB......and so on. For example, the row corresponding to this number would be 'E'.<br />
<br /> Assume that an excel sheet can have a large number of columns i.e column numbers like AAA,GHTY,KIUGH are possible.<br />
<br /> Kindly help Venkatesh to find out which column to store his fellow coder's name in.
</p>
<h2>Input</h2>
<p> The first line of the input contains an integer <b>T</b>(1&lt;=T&lt;=10) denoting the number of test cases. </p>
<p> The next <b>T</b> lines will be a string of lower-case characters representing a coder's name, for which you need to find out the column id.</p>
<p> Length of string will not exceed 10 characters.</p>
<h2>Output</h2>
<p> For each name, you need to print a string of upper-case alphabets corresponding to the column, where the name of the coder will be placed according to this algorithm.</p>

<h2>Example</h2>
<p> <b>Input:</b></p>
<p>2<br />
<br />duk<br />
<br />abcde<br />
<br />
</p>
<p> <b>Output:</b></p>
<p>E<br />
<br />DP<br />
<br />
</p>
<h2>Explanation</h2>
<p><b>Example case 1.</b> "duk" as shown above gets alloted a rank of 5. "abcde" will be the last element in the listing, so will be assigned a rank of 120; which when converted will fall into column DP.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/srujanjha">srujanjha</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-10-2014</td>
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