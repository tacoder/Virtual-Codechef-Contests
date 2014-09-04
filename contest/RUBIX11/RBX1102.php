<?php require("../../includes/header.php"); ?><h1>String Magic</h1><div class="content">

<p>
Zeus challenged his son Rubixius with a puzzle in which he presented a line of text which was modified on saying some magic words. Zeus asked him to keep track of the mutations and answer the current text in the string whenever asked. <br/><br/></br/></br/></p>
<p>Zeus wanted Rubixius to answer if any of these conditions held true. The conditions are prioritized with the first having highest priority.<br/><br/><br />
1. Only answer if the string has changed.<br/><br />
2. To check if Rubixius was paying attention he had to answer the correct text after every <b>K</b> magic queries when Zeus did not ask him the answer.<br/><br />
3. Rubixius had to tell Zeus the last state of the string.<br/><br/><br />
Rubixius mastered this game. Can you?</br/></br/></br/></br/></br/></br/></p>
<h3>Input</h3>
<p>The first line will contain an integer T&lt;50 with the number of Test Cases. Each case will start with a string S on a line. The following line contains 2 integers N and K where N is the number of queries and K is the query count after which Rubixius should automatically answer. Then N lines follow with 1 query/line. <br/><br/></br/></br/></p>
<table borders="all" width="520">
<tr>
<th width="20%">Magic Query</th>
<th width="80%">Description</th>
</tr>
<tr>
<td>IZA i str</td>
<td>Insert string <b>str</b> at position <b>i</b></td>
</tr>
<tr>
<td>DZA i j</td>
<td>Delete substring starting from i upto j</td>
</tr>
<tr>
<td>RZA i j str</td>
<td>Replace substring starting from i upto j with str</td>
</tr>
<tr>
<td>WZA i j k</td>
<td>Remove substring starting from i upto j and place it at k</td>
</tr>
<tr>
<td>KZA i j a b</td>
<td>Swap substring starting from i upto j with substring starting from a upto b</td>
</tr>
</table>
<p><br/>A query starting with <b>P</b> means Zeus wants Rubixius to answer.<br/><br />
<b>Constraints</b><br/><br />
In the queries if j>string length, then take j to be the last index.<br/><br />
i&lt;=string length<br/><br />
String length will always be less than 100.<br/><br />
String will be alphanumeric.<br/><br />
N,K&lt;1000<br/></br/></br/></br/></br/></br/></br/></br/></br/></p>
<h3>Output</h3>
<p>Output the text on a new line every time you need to.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
stringmagiciseasy
6 2
IZA 13 not
RZA 13 16 notvery
PDZA 13 20
WZA 5 12 0
DZA 7 7
DZA 7 13

<b>Output:</b>
stringmagicisnotveryeasy
stringmagiciseasy
magiciseasy

</pre>    </div><table borders="all" width="520">
<tr>
<th width="20%">Magic Query</th>
<th width="80%">Description</th>
</tr>
<tr>
<td>IZA i str</td>
<td>Insert string <b>str</b> at position <b>i</b></td>
</tr>
<tr>
<td>DZA i j</td>
<td>Delete substring starting from i upto j</td>
</tr>
<tr>
<td>RZA i j str</td>
<td>Replace substring starting from i upto j with str</td>
</tr>
<tr>
<td>WZA i j k</td>
<td>Remove substring starting from i upto j and place it at k</td>
</tr>
<tr>
<td>KZA i j a b</td>
<td>Swap substring starting from i upto j with substring starting from a upto b</td>
</tr>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/virai">virai</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-02-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>