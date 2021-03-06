<?php require("../../includes/header.php"); ?><h1>Gift Rift</h1><div class="content">

<p>
Our Chef is very happy that his son was selected for training in one of the finest culinary schools of the world.<br />
So he and his wife decide to buy a gift for the kid as a token of appreciation.<br />
Unfortunately, the Chef hasn't been doing good business lately, and is in no mood on splurging money.<br />
On the other hand, the boy's mother wants to buy something big and expensive.<br />
To settle the matter like reasonable parents, they play a game.
</p>
<p>
They spend the whole day thinking of various gifts and write them down in a huge matrix.<br />
Each cell of the matrix contains the gift's cost.<br />
Then they decide that the mother will choose a row number <b>r</b> while the father will choose a column number <b>c</b>,<br />
the item from the corresponding cell will be gifted to the kid in a couple of days.
</p>
<p>
The boy observes all of this secretly.<br />
He is smart enough to understand that his parents will ultimately choose a gift whose cost is <b>smallest</b> in its <b>row</b>,<br />
but <b>largest</b> in its <b>column</b>.<br />
If no such gift exists, then our little chef has no option but to keep guessing.<br />
As the matrix is huge, he turns to you for help.
</p>
<p>
He knows that sometimes the gift is not determined uniquely even if a gift exists whose cost is smallest in its row,<br />
but largest in its column.<br />
However, since the boy is so smart, he realizes that the gift's <b>cost</b> is determined <b>uniquely</b>.<br />
Your task is to tell him the gift's <b>cost</b> which is smallest in its row,<br />
but largest in its column, or to tell him no such gift exists.
</p>
<h3>Input</h3>
<p>First line contains two integers <b>R</b> and <b>C</b>, the number of rows and columns in the matrix respectively. Then follow <b>R</b> lines, each containing <b>C</b> space separated integers - the costs of different gifts.
</p>
<h3>Output</h3>
<p> Print a single integer - a value in the matrix that is smallest in its row but highest in its column. If no such value exists, then print "GUESS" (without quotes of course) </p>
<h3>Constraints</h3>
<p> 1 &lt;= <b>R</b>, <b>C</b> &lt;= 100 </p>
<p> All gift costs are positive and less than 100000000 (10^8) </p>
<h3>Example 1</h3>
<pre>
<b>Input:</b>
2 3
9 8 8
2 6 11

<b>Output:</b>
8
</pre><h3>Example 2</h3>
<pre>
<b>Input:</b>
3 3
9 8 11
2 6 34
5 9 11

<b>Output:</b>
GUESS
</pre><h3>Example 3</h3>
<pre>
<b>Input:</b>
2 2
10 10
10 10

<b>Output:</b>
10
</pre><h3>Explanation of Sample Cases</h3>
<p><b>Example 1</b>: The first row contains 9, 8, 8. Observe that both 8 are the minimum. Considering the first 8, look at the corresponding column (containing 8 and 6). Here, 8 is the largest element in that column. So it will be chosen.</p>
<p><b>Example 2</b>: There is no value in the matrix that is smallest in its row but largest in its column.</p>
<p><b>Example 3</b>: The required gift in matrix is not determined uniquely, but the required cost is determined uniquely.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shettynamit">shettynamit</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-05-2012</td>
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