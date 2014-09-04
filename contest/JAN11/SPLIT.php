<?php require("../../includes/header.php"); ?><h1>Splitting Giant Subs</h1><div class="content">

<p>
A submarine sandwich (or a "sub", for short) is a very long and skinny sandwich. The Chef loves to make extremely long subs that he affectionately calls "giant subs". Since a giant sub is so long, the Chef likes to place different sandwich ingredients along different sections of the sub. For instance, the first 20 cm of the sub may have a roast beef filling, the second 20 cm may have tuna, the third 20 cm of the sub might only contain vegetables, and so on. The only restriction on how the ingredients are placed is that each ingredient must appear in an even number of 20 cm segments, for aesthetic reasons.</p>
<p>
Now, Jack and Jill are going to have an eating competition. They have ordered one of the Chef's giant subs and will race to see who can eat half of the sub first. To be fair, both Jack and Jill must consume the same number of each ingredient. So, they will cut the sub into small pieces and partition these pieces so that for any sandwich ingredient, both Jack and Jill receive the same number of sections of the sub including this ingredient.</p>
<p>
Both Jack and Jill are very anxious to get started with the competition, so they want to do this as fast as possible. Help them cut the sub into smaller parts using the least number of cuts!</p>
<h3>Input</h3>

<p>
The input begins with a single line consisting of a single integer k ≤ 30 that indicates the number of test cases to follow. The first line of each test case begins with a single even integer n between 2 and 1000 indicating the number of sections in the giant sub.</p>
<p>
The last line of each test case contains n integers between 1 and 500 describe the ingredients used in the sub. The i'th such integer indicates which ingredient is used in the i'th section of the sub. You are guaranteed that each integer/ingredient appears an even number of times.</p>
<h3>Output</h3>

<p>
The output for each test case should consist of two lines. The first line indicates the number of cuts that should be made. Say this number is c. Then the second line consists of c integers between 1 and n-1 appearing in strictly increasing order. The i'th such integer, say t<sub>i</sub>, indicates that a cut should be made in the sub to separate section t<sub>i</sub> and t<sub>i</sub>+1 (the first section of the sub has index 1).</p>
<p>
These pieces will then be distributed to Jack and Jill in the following manner. Jack will receive all sections from the start of the sub until the cut after section t<sub>1</sub>. Then Jill will receive all sections between the cuts made after section t<sub>1</sub> and t<sub>2</sub>. Then Jack receives the sections between the cuts after sections t<sub>2</sub> and t<sub>3</sub>, etc. Thus, the pieces of the sub are given to Jack and Jill in an alternating fashion. The final piece of the sub (the part after section t<sub>c</sub>) is given to whoever did not receive the section of the sub that ended with section t<sub>c</sub>.</p>
<p>
The output should be such that Jack and Jill receive the same number of each ingredient after these cuts are made (note that this is always possible). Your goal should be to do this with as few cuts as possible. This is a scored problem so your output does not have to be optimal, it may contain more cuts than is necessary.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
8
1 2 3 2 3 2 1 2
6
1 1 2 2 3 3
8
500 400 2 400 500 500 2 500

<b>Output:</b>
1
4
3
1 3 5
4
1 3 4 6
</pre><h3>Scoring:</h3>

<p>
The score for each test case is simply c, the number of cuts made. The score for all test cases in a file is the sum of the scores for the individual test cases in that file. There are multiple files used to test this problem and your overall score is the average of the scores for each file. Your goal should be to make this score as small as possible.</p>
<h3>Test Data:</h3>

<p>
Some of the test data is created specifically to make certain heuristics perform poorly. Other test data is generated randomly from varying distributions.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/friggstad">friggstad</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/subra">subra</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-11-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>