<?php require("../../includes/header.php"); ?><h1>Ciel and Genjiko</h1><div class="content">

<p>
<i>Genjiko</i> is one of the Japanese traditional games.<br />
Chef Ciel will take place a variant version of genjiko in her restaurant.
</p>
<p>
The rules of the game are the following:
</p>
<ul>
<li>The challenger must be blindfolded.</li>
<li>Ciel feeds the challenger one of the <strong>N</strong> foods menus of her restaurant, <strong>M</strong> times.</li>
<li>The challenger must answer whether the <strong>i</strong>-th food and the <strong>j</strong>-th food are same or not, for all 1 ≤ <strong>i</strong> &lt; <strong>j</strong> ≤ <strong>M</strong>.</li>
<li>For making the game difficult, Ciel cannot use the same menu for both the <strong>i</strong>-th menu and the (<strong>i</strong>+<strong>j</strong>)-th menu for all 1 ≤ <strong>j</strong> ≤ <strong>K</strong>. (The challenger knows this)</li>
</ul>
<p>
Ciel wonders how many patterns can be the challenger's answer.<br />
Your task is calculating the number of the patterns modulo 1000000009 (10<sup>9</sup>+9).
</p>
<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.<br />
Then <strong>T</strong> test cases follow.<br />
Each test case has 3 integers <strong>N</strong>, <strong>M</strong> and <strong>K</strong>.
</p>
<h3>Output</h3>
<p>
Print the number of the patterns of the possible answers modulo 1000000009 (10<sup>9</sup>+9).
</p>
<h3>Constraints</h3>
<p>
1 ≤ <strong>T</strong> ≤ 100<br />
1 ≤ <strong>N</strong> ≤ 200<br />
1 ≤ <strong>M</strong> ≤ 1000000000 (10<sup>9</sup>)<br />
0 ≤ <strong>K</strong> ≤ 200
</p>
<h3>Sample Input</h3>
<pre>5
200 5 0
2 3 1
2 3 0
3 3 1
1 1000000000 200</pre><h3>Sample Output</h3>
<pre>52
1
4
2
0</pre><h3>Output details</h3>
<p>
The first case is the same as genjiko.<br />
In the traditional game genjiko, we make connections between each possible answer and the name of a book of <i>The Tale of Genji</i>.<br />
However The Tale of Genji is composed of 54 books, so the names of the first book and the last book are unused.
</p>
<p>
Let the letters A, B, C, ... denote the <strong>N</strong> menus, and let "ABA" mean that Ciel uses A for the 1st food, and uses B for the 2nd food, and uses A for the 3rd food.<br />
In the second case, Ciel cannot use the same menu consecutively.<br />
So Ciel can use only 2 patterns "ABA" and "BAB".<br />
However there is only one possible answer [1st ≠ 2nd, 1st = 3rd, 2nd ≠ 3rd].
</p>
<p>
In the third case, Ciel can use 8 patterns "AAA", "AAB", "ABA", "ABB", "BAA", "BAB", "BBA" and "BBB".<br />
And there are four possible answers [1st = 2nd, 1st = 3rd, 2nd = 3rd], [1st = 2nd, 1st ≠ 3rd, 2nd ≠ 3rd], [1st ≠ 2nd, 1st = 3rd, 2nd ≠ 3rd] and [1st ≠ 2nd, 1st ≠ 3rd, 2nd ≠ 3rd].
</p>
<p>
In the fifth case, Ciel can use no patterns.
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