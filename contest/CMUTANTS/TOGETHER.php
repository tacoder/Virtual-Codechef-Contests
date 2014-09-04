<?php require("../../includes/header.php"); ?><h1>Romeo and Juliet</h1><div class="content">

<table border="0">
<tbody>
<tr>
<td>
<p><img src="http://farm6.static.flickr.com/5135/5467375751_0718467591.jpg" width="220" height="150" alt="romeo_juliet" /></p>
<td>
<p>Romeo and Juliet are in a long distance relationship. They both are working in software industry. As a result, both of them are busy coding most of the days. There are in total <b>N</b> days ( numbered 1, 2, 3, ... , N ) and each day can be a working day for either Juliet or Romeo or both. </p>
<td/>
</td/></td></td></tr>
</tbody>
</table>
<p>Juliet is very brave and wants to skip exactly <b>K</b> continuous days to go and meet Romeo. But she wants to select these <b>K</b> days ( from the N days ) in such a way that she can spend maximum number of days with Romeo. If there are multiple ways to select these days, she wants to select the one in which she misses minimum number of her working days. Still if there are multiple ways, she selects the one in which she can meet Romeo as early as possible. </p>
<p>Given the working days of Romeo and Juliet, help Juliet select <b>K</b> days in which she can visit Romeo. Output the starting day number of Juliet's visit to meet Romeo.</p>
<p>
<b>Note:</b> Romeo can't take a leave on a working day and hence can't spend that day with Juliet.</p>
<h3>Input</h3>
<p>First line contains <b>T</b> , the number of test cases. Each test case has 3 lines. First line contains <b>N</b> and <b>K</b>. Second line begins with an integer <b>R</b>, the number of working days for Romeo. This is followed by <b>R</b> integers in the same line, the working days of Romeo. Third line begins with an integer <b>J</b>, the number of working days for Juliet. This is followed by <b>J</b> integers in the same line, the working days of Juliet.</p>
<p><b>T</b> &lt;= 10  </p>
<p>1 &lt;= <b>N</b> &lt;=100000 </p>
<p>1 &lt;= <b>K</b> &lt;= N </p>
<p>0 &lt;= <b>R</b> &lt;=N </p>
<p>0 &lt;= <b>J</b> &lt;=N </p>
<h3>Output</h3>
<p>Output the starting day number of Juliet's visit to meet Romeo.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
6 3
3 1 3 5
2 2 3
6 3
3 1 3 5
1 3
1 1
1 1
1 1
6 3
2 2 5
2 1 4

<b>Output:</b>
4
4
1
1
</pre>    </div><table border="0">
<tbody>
<tr>
<td>
<p><img src="http://farm6.static.flickr.com/5135/5467375751_0718467591.jpg" width="220" height="150" alt="romeo_juliet" /></p>
<td>
<p>Romeo and Juliet are in a long distance relationship. They both are working in software industry. As a result, both of them are busy coding most of the days. There are in total <b>N</b> days ( numbered 1, 2, 3, ... , N ) and each day can be a working day for either Juliet or Romeo or both. </p>
<td/>
</td/></td></td></tr>
</tbody>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rosyish">rosyish</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-02-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>