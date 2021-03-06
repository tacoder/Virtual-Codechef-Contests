<?php require("../../includes/header.php"); ?><h1>Popular Rice Recipe</h1><div class="content">

<p align="justify">
Did you know that there are over 40,000 varieties of Rice in the world ? There are so many dishes that can be prepared with Rice too. A famous chef from Mumbai, Tid Gusto prepared a new dish and named it 'Tid Rice'. He posted the recipe in his newly designed blog for community voting, where a user can plus (+) or minus (-) the recipe. The final score is just the sum of all votes, where (+) and (-) are treated as +1 and -1 respectively. But, being just a chef ( and not a codechef ) he forgot to take care of multiple votes by the same user.</p>
<p align="justify">
A user might have voted multiple times and Tid is worried that the final score shown is not the correct one. Luckily, he found the user logs, which had all the <b>N</b> votes in the order they arrived.  Remember that, if a user votes more than once, the user's previous vote is first nullified before the latest vote is counted ( see explanation for more clarity ). Given these records in order ( and being a codechef yourself :) ), calculate the correct final score.
</p>
<h3>Input</h3>
<p align="justify">First line contains T ( number of testcases, around 20 ). T cases follow. Each test case starts with N ( total number of votes, 1 &lt;= N &lt;= 100 ). Each of the next N lines is of the form "userid vote" ( quotes for clarity only ), where userid is a non-empty string of lower-case alphabets ( 'a' - 'z' ) not more than 20 in length and vote is either a + or - . See the sample cases below, for more clarity.</p>
<h3>Output</h3>

<p align="justify">For each test case, output the correct final score in a new line</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
4
tilak +
tilak +
tilak -
tilak +
3
ratna +
shashi -
ratna -
3
bhavani -
bhavani +
bhavani -

<b>Output:</b>
1
-2
-1
</pre><p>
<b>Explanation</b></p>
<pre>Case 1 : Initially score = 0. Updation of scores in the order of user tilak's votes is as follows,<br />
( + ): +1 is added to the final score. This is the 1st vote by this user, so no previous vote to nullify. score = 1
( + ):  0 should be added ( -1 to nullify previous (+) vote, +1 to count the current (+) vote ). score = 1
( - ) : -2 should be added ( -1 to nullify previous (+) vote, -1 to count the current (-) vote ). score = -1
( + ): +2 should be added ( +1 to nullify previous (-) vote, +1 to count the current (+) vote ). score = 1<br />
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/masked_zorro">masked_zorro</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-04-2011</td>
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