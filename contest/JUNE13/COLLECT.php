<?php require("../../includes/header.php"); ?><h1>Collecting Magical Berries</h1><div class="content">

<p>ChefLand is very famous for its magical forests. There you can find a lot of different trees, fruits, mushrooms and many other charming things. Recently, <b>N</b> bushes of magical berries (numbered <b>1</b> to <b>N</b>) have been discovered. The berries are in fact very tasty, and it has become very popular among the tourists to pick these berries (don't worry, as the berries are magical, they'll grow next night again :) ).</p>
<p>Groups of tourists often want to go for a walk to pick some berries. For the <b>i</b>-th group it is known that it consists of <b>K<sub>i</sub></b> people and they will collect all the berries, from <b>K<sub>i</sub></b> consecutive bushes, beginning from the <b>L<sub>i</sub></b>-th, going to the <b>L<sub>i+1</sub></b>-th, the <b>L<sub>i+2</sub></b>-th and so on. Generally, a plan of the <b>i</b>-th group of tourists can be described by the numbers <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b> - the leftmost and the rightmost bush for the <b>i</b>-th group. When the group have picked some amount of berries, we consider that they've picked all the berries from the bushes from the <b>L<sub>i</sub></b>-th to the <b>R<sub>i</sub></b>-th, they want to divide them <i>fairly</i>. <i>Fair</i> division is a division in such a way, that the difference between the maximal and the minimal number of berries a single tourist from the group receives is less than two. All the berries (even from a single bush) are different. Generally, there are a lot of ways to divide them fairly. For example, you can divide fairly two berries between two tourists in two ways.</p>
<p>Some tourists are fond of dividing the berries. So, they will get upset if the number of ways to divide them is too small. But some tourists will get upset if the number of ways if too huge, they will find it quite confusing. So, the ChefLand tourist agency has offered the following service: for each group of tourists they tell the number of ways to divide the berries<br />
fairly among them after the walk. As they currently don't have enough employees, they've asked you to help them. Of course, the number of berries on bushes changes during a day. You'll receive this information. Also, you'll receive the information about the groups of tourists. For each group of tourists, please tell the number of ways to divide collected berries fairly. We understand that this number can be quite huge, so we ask you to calculate it modulo <b>3046201</b>.</p>
<h3>Input</h3>
<p>The first line of the input consists of a single integer <b>N</b> - the number of bushes.</p>
<p>The second line consists of <b>N</b> integers - the <b>i</b>-th integer corresponds to the amount of the berries on the <b>i</b>-th bush in the beginning.</p>
<p>The third line consists of a single integer <b>Q</b> - the number of requests given to your program. </p>
<p>Next <b>Q</b> lines are the lines of the following form: "change A B" - then the amount of the berries on the bush <b>A</b> becomes equal to <b>B</b>, or "query L R" - if a group of tourists wants to visit all the bushes from the <b>L</b>-th to the <b>R</b>-th, what is the number of ways to divide their collected berries fairly, modulo <b>3046201</b>.</p>
<h3>Output</h3>
<p>For each "query L R" request, output the number of ways, asked in the statement, modulo <b>3046201</b>. Output one number on a single line.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b>&lt;=<b>N</b>&lt;=<b>100000</b></li>
<li><b>1</b>&lt;=<b>Q</b>&lt;=<b>100000</b></li>
<li>You can assume that the number of berries on a single bush will not exceed <b>30</b></li>
</ul>
</p>
<p></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
8
2 1 1 2 1 2 2 2 5
change 2 2
query 1 8
query 5 7
query 3 3
query 4 4

<b>Output:</b>
2065880
90
1
1

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
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