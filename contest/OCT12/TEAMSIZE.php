<?php require("../../includes/header.php"); ?><h1>Team Formation</h1><div class="content">

<p>
Battle of the Chefs is coming up! It's a contest where different teams of different Chefs compete against each other. Our Chef wants to send one of the best teams from his entire staff. Selecting a good team is not about having the best people, but it is about having members who can cooperate and work well with each other. Chef is very aware of this fact. So he chooses the following strategy to decide a team. He lines up all his <b>N</b> cooks in a line. Each of these cooks has a skill level associated with him. Denote the level of the <b>i</b>-th cook as <b>skill[i]</b> for <b>1</b> ≤ <b>i</b> ≤ <b>N</b>. Let us make a few points on a team formation.
</p>
<p><ul>
<li>A team can have any number of cooks.</li>
<li>Each team should consist of consecutive cooks. So, for example, cooks with positions 3, 4, 5 can form a team, but cooks with positions 4, 5, 7, 8 can not.</li>
<li>A team is a <i>candidate team</i> if the difference between the maximum skill and the minimum skill of the cooks in the team does not exceed the threshold <b>C</b>.</li>
<li>A cook can be in 0 or more <i>candidate teams</i>. Which means that <i>candidate teams</i> can intersect.</li>
<li>Two <i>candidate teams</i> are considered to be different if there exists at least one cook who is in one team but not in the other.</li>
</ul>
</p>
<p>
Chef has not yet decided the team of what size he is going to send to the battle. To be precise we note, that the team size is the total number of cooks in it. For the given team size Chef wants to consider all candidate teams of this size according to the rules described above, evaluate them for himself and choose the best one. Denote the total number of candidate teams for the given size <b>K</b> as <b>cand[K]</b>. To increase the chances of choosing better team he wants the number of candidate teams to be as large as possible. But Chef is a human and can't evaluate too many teams. The maximal number of teams he can evaluate depends on many factors such as his mood or fatigue. We call it the Chef's limit. Denote the current Chef's limit as <b>M</b>. Since Chef still wants the total number of candidate teams to be as large as possible you need to find the team size <b>K</b> such that <b>cand[K] ≤ M</b>, among all such <b>K</b> find the value for which <b>cand[K]</b> is maximal and if such <b>K</b> is not unique find the minimal <b>K</b> among them. Since Chef's limit always changes according to his mood or fatigue you should find the required team size for several values of <b>M</b>. Chef also wants to know the total number of candidate teams for the size you will find. There will be <b>Q</b> values of <b>M</b> in all.
</p>
<p>
In order to keep the input small the skills of the cooks will be given in the following way.</p>
<ul>
<li>Skills of the first <b>X</b> cooks are given in the input, where <b>X = min(10000, N).</b></li>
<li>If <b>N</b> &gt; <b>10000</b> skills of the remaining cooks for <b>10000</b> &lt; <b>i</b> ≤ <b>N</b> are calculated as
<p><b>skill[i]</b> = (<b>A</b> * <b>skill[i-1]</b> + <b>B</b> * <b>skill[i-2]</b> + <b>D</b>) <b>mod 2<sup>30</sup></b>,</p>
<p>where <b>A</b>, <b>B</b> and <b>D</b> are given in the input. Here <b>mod</b> denotes the modulo operation, that is, <b>Y mod Z</b> is the remainder of division of <b>Y</b> by <b>Z</b>.</p></li>
</ul>

<h3>Input</h3>
<p>
The first line of the input contains a single integer <b>T</b>, the number of test cases to follow.<br />
Each test case consists of 3 lines.<br />
The first line contains 6 space-separated integers <b>N, C, Q, A, B</b> and <b>D</b>.<br />
The second line contains <b>X = min(N, 10000)</b> space-separated integers, <b>i</b>-th integer among them represents the skill of the <b>i</b>-th cook, that is, the number <b>skill[i]</b>.<br />
The third line contains <b>Q</b> space-separated integers, the values of <b>M</b> for which you need to find the optimal team size and the number of candidate teams of this size.
</p>
<h3>Output</h3>
<p>
For each test case, output <b>Q</b> lines containing the optimal team size for the corresponding value of <b>M</b> and the number of candidate teams corresponding to this team size separated by a space.
</p>
<h3>Constraints</h3>
<p>
<b>1</b> ≤ <b>T</b> ≤ <b>5</b><br />
<b>1</b> ≤ <b>N</b> ≤ <b>500000</b><br />
<b>0</b> ≤ <b>C</b> &lt; <b>2<sup>30</sup></b><br />
<b>1</b> ≤ <b>Q</b> ≤ <b>1000</b><br />
<b>0</b> ≤ <b>A</b>, <b>B</b>, <b>D</b> &lt; <b>2<sup>30</sup></b><br />
<b>0</b> ≤ <b>skill[i]</b> &lt; <b>2<sup>30</sup></b> for <b>1</b> ≤ <b>i</b> ≤ <b>X</b><br />
<b>1</b> ≤ <b>M</b> ≤ <b>N</b>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
6 3 3 1 1 1
6 2 4 5 6 3
4 3 6
6 10 1 2 2 2
1 1000 1 1000 1 1000
4

<b>Output:</b>
2 4
3 3
1 6
2 0
</pre><h3>Explanation</h3>
<p>
<b>Case 1.</b><br />
With team size 2, we have 4 candidate teams: {2, 4}, {4, 5}, {5, 6}, and {6, 3}. Here numbers denote the cooks' skills. With any other team size, the number of candidate teams is either less than 4 or greater than 4.<br />
Similarly, with team size 3, we have 3 candidate teams, which are {2, 4, 5}, {4, 5, 6} and {5, 6, 3}.<br />
With team size 1, we have 6 candidate teams with one member in each team.
</p>
<p>
<b>Case 2.</b><br />
With team size 1, we have 6 possible candidate teams. But 6 &gt; 4. For all other team sizes, the total number of candidate teams is 0. Thus, the answer is the smallest size among them, i.e., 2.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-10-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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