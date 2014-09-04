<?php require("../../includes/header.php"); ?><h1>Remember the recipe</h1><div class="content">

<p>Chef Jessie has a lot of recipes with her <b>(N)</b>. She often remembered the starting few characters of the recipe and forgot the rest. As all the great chefs do, Jessie also numbered the recipes depending on the priority. So, given the list of recipes along with their priorities answer Jessie&rsquo;s queries.</p>
<p>Jessie&rsquo;s queries are as follows:<br />
She gives you the first few characters of a recipe; you have to print the complete recipe with the highest priority.</p>
<p><b>Note:</b><br />
Every recipe has a unique priority
</p>
<h3>Input</h3>
<p>
First line contains an integer<b> N</b> - the number of recipes.<br />
Followed by <b>N</b> strings <b>Si</b> along with an integer each <b>Vi</b>.<br />
<b>Si</b> stands for the recipe and <b>Vi</b> for the priority.<br />
It is followed by an integer <b>Q</b> - the number of queries.<br />
Followed by <b>Q</b> strings <b>Qi</b>.<br />
Each string <b>Si, Qi</b> contain only lowercase Latin alphabets ('a' - 'z') and <b>'-'</b>.</p>
<h3>Output</h3>

<p><b>Q</b> &ndash; lines, each contain the answer for each of the query.<br />
If for a query no recipe matches print <b>"NO"</b>. (Without quotes)</p>
<p><b>Constraints:</b></p>
<p>0 &lt;= <b>N</b> &lt;= 1000</p>
<p>0 &lt;= <b>Q</b> &lt;= 1000</p>
<p>-10^9 &lt;= <b>Vi</b> &lt;= 10^9</p>
<p>1 &lt;= <b>|Si|</b> &lt;= 1000 (length of <b>Si</b>)</p>
<p>1 &lt;= <b>|Qi|</b> &lt;= 1000 (length of <b>Qi</b>)</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
flour-with-eggs 100
chicken-ham -10
flour-without-eggs 200
fish-with-pepper 1100
6
f
flour-with
flour-with-
c
fl
chik

<b>Output:</b>
fish-with-pepper
flour-without-eggs
flour-with-eggs
chicken-ham
flour-without-eggs
NO

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/subra">subra</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-03-2012</td>
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