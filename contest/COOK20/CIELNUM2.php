<?php require("../../includes/header.php"); ?><h1>Ciel Numbers II</h1><div class="content">

<p>
Recently, chef Ciel often hears about <i>lucky numbers</i>.
</p>
<hr />
<div align="center">
<i><br />
Everybody knows that lucky numbers are positive integers<br />
whose decimal representation contains only the lucky digits 4 and 7.<br />
For example, numbers 47, 744, 4 are lucky and 5, 17, 467 are not.<br />
</i>
</div>
<hr />
<p>
Ciel decides to make <i>Ciel numbers</i>.<br />
As you know, Ciel likes the digit 8 very much.<br />
And then, Ciel likes the digits 5 and 3.<br />
So Ciel defines Ciel numbers as the positive integers <strong>k</strong> such that <strong>d</strong>(<strong>k</strong>, 8) ≥ <strong>d</strong>(<strong>k</strong>, 5) ≥ <strong>d</strong>(<strong>k</strong>, 3) and <strong>d</strong>(<strong>k</strong>, <strong>i</strong>) = 0 for all <strong>i</strong> = 0, 1, 2, 4, 6, 7, 9,<br />
where <strong>d</strong>(<strong>k</strong>, <strong>i</strong>) denotes the number of the digit <strong>i</strong> in the decimal representation of the integer <strong>k</strong>.<br />
For example, the first few Ciel numbers are 8, 58, 85, 88, 358, 385, 538, 583, 588, 835, 853, 858, 885, 888, ....
</p>
<p>
Ciel's restaurant has <strong>N</strong> menus.<br />
And Ciel want to know how many menus have Ciel numbers as their price.<br />
Your task is to find it.
</p>
<h3>Input</h3>
<p>
The first line contains an integer <strong>N</strong>.<br />
Then <strong>N</strong> lines follow.<br />
Each line has the name <strong>S<sub>i</sub></strong> of the menu and its price <strong>P<sub>i</sub></strong> separated by a single space.
</p>
<h3>Output</h3>
<p>
Print the number of menus whose prices are one of Ciel numbers.
</p>
<h3>Constraints</h3>
<p>
1 ≤ <strong>N</strong> ≤ 1000<br />
1 ≤ |<strong>S<sub>i</sub></strong>| ≤ 100, where |<strong>S<sub>i</sub></strong>| denotes the length of <strong>S<sub>i</sub></strong><br />
Each letter of <strong>S<sub>i</sub></strong> is either an alphabetical letter or a digit or a single quotation mark or a space.<br />
1 ≤ <strong>P<sub>i</sub></strong> &lt; 1000000 (10<sup>6</sup>)<br />
<strong>P<sub>i</sub></strong> contains no leading zeros.
</p>
<h3>Sample Input</h3>
<pre>6
milk 58
Ciel's Drink 80
The curry 2nd edition 888888
rice omelet 85855
unagi 1
   The first    and last letters can be a space    358</pre><h3>Sample Output</h3>
<pre>3</pre><h3>Output details</h3>
<p>
58 and 888888 and 358 are Ciel numbers.<br />
80 and 85855 and 1 are not Ciel numbers.
</p>
<h3>Notes</h3>
<p>
Different operating systems have different ways of representing a newline; do not assume one particular way will be used.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rajivka">rajivka</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-02-2012</td>
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