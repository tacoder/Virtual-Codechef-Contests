<?php require("../../includes/header.php"); ?><h1>Statistics HW</h1><div class="content">
<p>Tanu is bored with school, doing same old questions. The Maths teacher has given then homework to calculate mean, median and mode of some data. Can you help Tanu with the homework?<br /><br /><i>Mean</i> of an array of numbers mean their average.<br /><i>Median</i> of an array means the middle element when the array is sorted. Note that when the array size (=n) is even, the median is (n/2 + 1)<sup>th</sup> element.<br /><i>Mode</i> of an array is the number that occurs maximum number of times in the array. If there are more than one number having this property, mode is the largest number amongst them.<br /><br /><br />
<h3>INPUT</h3>
</p><p>First line of input contains two integers, <b>N</b> and <b>Q</b>, the size of the array and number of queries.<br />The next line contains array <b>A</b>, containing N space separated integers.<br />Each of the next Q lines contain two integers, <b>POS</b> and <b>VAL</b>, which means change the POS<sup>th</sup> value of A to VAL.<br /><br /><br />
<h3>OUTPUT</h3>
</p><p>After each query, print a single line containing the mean, median and mode of the updated array. The value of mean should be correct to upto 5 decimal places.<br /><br /><br />
<h3>CONSTRAINTS</h3>
</p><p>1&lt;=N&lt;=100000<br />1&lt;=Q&lt;=100000<br />0&lt;=POS&lt;=N-1<br /> Each element of array A, and VAL will be between 0 and 1000000000, inclusive.<br /><br /><br />
<h3>SAMPLE INPUT</h3>
<pre>3 2<br />1 2 2<br />0 5<br />1 3</pre></p><p><br /><br /><br />
<h3>SAMPLE OUTPUT</h3>
<pre>3.0000000 2 2<br />3.3333333 3 5</pre></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/techfest2k15">techfest2k15</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>