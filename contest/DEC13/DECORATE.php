<?php require("../../includes/header.php"); ?><h1>Lucy and the Flowers</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/mandarin/DECORATE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/russian/DECORATE.pdf">Russian</a>.</h3>
<p>The staff of one of the most famous ChefLand's restaurants have just received the news! A delegation from the neighbouring country is going to visit the restaurant. The staff want to make this visit exciting and pleasant. Lucy is also a member of the staff and among all the things that the staff want to do, her assignment is to arrange the flowers on the tables.</p>
<p>Generally, there are <b>26</b> kinds of flowers, a small latin letter corresponds to a single kind. Equal letters correspond to equal kinds. Different letters correspond to different kinds. According to the old ChefLand tradition, one can make a bouquet from some flowers only if it is a substring of some magic string <b>T</b>. ChefLands make bouquets in such a manner that the order of flowers in them is important. The restaurant has a tradition to decorate a single table with <b>N</b>, not necessary different, bouquets. Their order matters.</p>
<p>Some decorations look really similar. Generally, two arrangements (let's call them <b>A</b> and <b>B</b>) are similar if <b>B</b> is a cyclic shift of <b>A</b>, or <b>B</b> is a reversed cyclic shift of <b>A</b>. For example the sequence ("aba", "c", "b") is a cyclic shift of a sequence ("b", "aba", "c"), and the sequence ("c", "b", "a", "e", "d") is a reversed cyclic shift of a sequence ("a", "b", "c", "d", "e").</p>
<p>Now Lucy thinks that the most beautiful bouquets are "symmetric" ones. The bouquet is "symmetric" if the string that corresponds to the arrangement of flowers in it is a palindrome (it reads from left to right the same as from right to left). </p>
<p>So, she thinks that the decoration of the table will be especially beautiful if all the bouquets in it are "symmetric". But then, Lucy had realized that the number of such decorations of the tables can be less than the number of guests. She doesn't want to decorate two tables in a similar manner, so she would like to know the number of distinct  decorations such that no two tables looks similar.</p>
<h3>Input</h3>
<p>The first line of input consists of a single string <b>T</b>.<br /><br />
The second line of input consists of a single integer <b>N</b>.</p>
<h3>Output</h3>
<p>Output the number of distinct decorations.</p>
<h3>Constraints</h3>
<p>1 ≤ |<b>T</b>| ≤ 100000;<br /><br />
1 ≤ <b>N</b> ≤ 600;<br /><br />
String <b>T</b> consists only of lowercase English letters.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
aba
4

<b>Output:</b>
21
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-11-2012</td>
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