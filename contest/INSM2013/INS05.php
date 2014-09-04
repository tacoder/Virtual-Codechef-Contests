<?php require("../../includes/header.php"); ?><h1>War Zone</h1><div class="content">
<p>Fancyland is a land of peace. N People living there are peaceful and there housing colony are in a sequential manner. People of Fancyland have some K amount power.<br />
But with changing time most powerful person Anurag and second most powerful Jayesh became selfish.<br />
Now they both want to kill each other. .</p>
<p>
Seeing this the king of Fancyland Ankit immediately ordered to shift their houses as far as possible. Since Anurag has more power, he prefers to be on the right side of the colony.
</p>
<p>
Both Jayesh and Anurag have the talent to convince people and change their mind to join them and form a group to have a war.<br />
Both the groups under all circumstances have equal number of members in their group with their respective powers. Since Both Anurag and Jayesh wants to be as close as possible so that they can fight hence they one by one exchange their houses with people whom they have convinced. Note that they can convince only their neighbours.<br />
Both Jayesh and Anurag arrange their group members in such a manner that the person possesing highest power in the group lives adjacent to them and then second highest<br />
member next and so on and then they start convincing other new neighbour.</p>
<p>
Seeing their convincing talent King decided to form a peace making commitee which has more or equal number of members than the members in conflicting groups(excluding Anurag and Jayesh),<br />
so that no war occurs.</p>
<p>Peace making commitee also comprises of citizens from the very same Fancyland. King Ankit gives them special techniques to prevent war,<br />
thus commitee members give away their personal powers and now their power K is 0.
</p>
<h3>Input</h3>
<p>First input is number of test cases T.<br /><br />
 In every test case first line contains number of people living in Fancyland.<br /><br />
 Next line contains N space seperated integers which denotes the power K of the person living their.</p>
<h3>Output</h3>
<p>Output the array showing the situation where all conditions are met and if one more person is convinced by the groups war will occur..</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>3</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>k</b> ≤ <b>100000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
10
1 2 3 4 5 6 7 8 9 10
5
78 35 66 12 88

<b>Output:</b>
1 2 9 0 0 0 0 10 8 7
35 78 0 88 12

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/insomnia_adm">insomnia_adm</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-09-2013</td>
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