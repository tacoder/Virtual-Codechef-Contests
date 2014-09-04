<?php require("../../includes/header.php"); ?><h1>Vote for the Noodle Soup</h1><div class="content">

<p align="justify">Did you ever hear about 'crossing the bridge noodle' ? Let me tell you that it's not some kind of bridge made of noodles. It's a dish, a kind of rice noodle soup. Mr.Ping makes the best noodle soup and his son Po is eagerly waiting for the user reviews in his father's blog. Users can vote with a (+) or a (-) and accordingly +1 or -1 is added to the total score respectively. Note that if a user votes multiple times, only his/her latest vote is counted towards the total score.
</p>
<p align="justify">Po opens the blog to see initial score of 0. To see the updated score without refreshing the page, he has to keep voting himself. After each of Po's clicks on (+) or (-), he can see the current total score, of course that considers Po's vote too. He is wondering how many users other than him could have possibly voted. Given the sequence of clicks made by Po and the total score displayed just after each of his clicks, can you tell him the minimum number of users that could have possibly voted at least once, other than Po.</p>
<h3>Input</h3>

<p align="justify">There are multiple test cases ( at most 21 ). Each case starts with an integer <i>N</i> ( 1 &lt;= <i>N</i> &lt;= 1000 ), the number of Po's clicks. Sequence of <i>N</i> clicks follows, one on each line of the form <i>"vote score"</i> (without quotes, separated by a space), where <i>vote</i> is either a 'P' or a 'M', representing Plus(+) and Minus(-) respectively, the one clicked by Po and <i>score</i> is the score displayed after Po's click ( -1,000,000,000 &lt;= <i>score</i> &lt;= 1,000,000,000 ). The last case has <i>N</i> = 0 and should not be processed. Each case is followed by an empty line.</p>
<h3>Output</h3>

<p align="justify">For each test case, output the minimum number of users that could have possibly voted at least once.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
P 1
P 2

2
P 2
M -2

0

<b>Output:</b>
1
1
</pre><p>
<b>Explanation:</b></p>
<p>Case 1 :<br />
P 1 , Po voted (+) and score = 1 is possibly Po's vote itself.<br />
P 2 , Po again voted (+), but as only latest vote of a user is counted, Po contributed only +1 to the score, so possibly one more user voted with a (+). Remember that we have to find the number of users other than Po, so answer is 1</p>
<p>Case 2 :<br />
P 2 , Po voted (+) and score = 2, possibly another user A also voted (+)<br />
M -2 , Po voted (-) and score = -2. Possibly the same user A also voted (-)<br />
So there can possibly be just one other user A</p>
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
            <td>29-07-2011</td>
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