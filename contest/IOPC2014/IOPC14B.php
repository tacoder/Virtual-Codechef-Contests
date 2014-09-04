<?php require("../../includes/header.php"); ?><h1>Add and Compute Path</h1><div class="content">
<p>In the kingdom of Baratheons, there is a strict hierarchy in the army. The leader of the army is the king under whose command are a set of soldiers. Each soldier commands a certain section of army, that is there are certain soldiers under him who may be commanding some more soldiers, and the similar hierarchical structure is followed downwards, till the lowest rank of soldiers. Note that if soldier <strong>A</strong> commands soldier <strong>B</strong> and <strong>B</strong> commands <strong>C</strong>, then <strong>C</strong> also comes under the purview of <strong>A</strong>, however it will be said that <strong>B</strong> is under the direct command of <strong>A</strong> and <strong>C</strong> is under the direct command of <strong>B</strong>. Also note that each soldier has a unique hierarchical path to the king.<br /><br /></p>
<p>The army commission, a different body, may decide to give certain units of power to a particular section of the army. To do this, the commission gives <strong>K</strong> units of power to the soldier commanding a section, which is cloned and each soldier under his command, including himself, receives <strong>K</strong> units of power. Remember, initially all soldiers have <strong>zero</strong> units of power.<br /><br /></p>
<p>In times of war, a team of soldiers may be selected from across sections. The team is selected in the following way: given two soldiers <strong>A</strong> and <strong>B</strong>, all the soldiers in the path through the hierarchical structure from <strong>A</strong> to <strong>B</strong>, are included in the team. For such a team, you have to calculate the total power of the team. <br /></p>
<h3>Input Format</h3>
<p>First line contains three space separated integers <strong>N</strong>, <strong>K</strong> and <strong>R</strong>.<br /><br />
N represents the number of soldiers<br /><br />
<strong>R</strong> represents the id of the king.<br /><br /></p>
<p>Next <strong>N-1</strong> lines describes the hierarchical structure. Each line consists of two integers <strong>A</strong> and <strong>B</strong>, signifying that soldier <strong>B</strong> is under the direct command of soldier <strong>A</strong>.<br /><br /><br />
<strong>K</strong> following lines represent operations of the following types.<br />For a query operation, the first character is <strong>Q</strong>, followed by two space separated integers <strong>X</strong> and <strong>Y</strong>.<br />For an update operation, the first character is <strong>U</strong>, followed by two space separated integers <strong>S</strong> and <strong>T</strong>, such that the soldier <strong>S</strong> is given <strong>T</strong> units of power to be cloned and distributed to soldiers under his command.<br /></p>
<h3>Output Format</h3>
<p>For each query operation, output the total power of all soldiers in the path through the hierarchical structure from <strong>X</strong> to <strong>Y</strong>.<br /></p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ N ≤ 1e5 </li>
<li>1 ≤ K ≤ 1e5 </li>
<li>1 ≤ X,Y,S ≤ 1e5 </li>
<li>Absolute(T) ≤ 1000 </li>
</ul>
<p><br /></p>
<h3>Sample Input</h3>
<p>5 3 1<br /><br />
1 2<br /><br />
1 3<br /><br />
3 4<br /><br />
3 5<br /><br />
U 3 5<br /><br />
Q 4 5<br /><br />
Q 4 1<br /></p>
<h3>Sample Output</h3>
<p>15<br /><br />
10<br /></p>
<h3>Explanation</h3>
<p>Initially all soldiers have 0 power. When the update operation is executed, soldiers 3, 4 and 5 get 5 units of power.<br /><br />
For the first query, all soldiers in the path from 4 to 5 are added up, i.e, power(4) + power(3) + power(5) = 15, is given as output.<br /><br />
For second query, all soldiers in the path from 4 to 1 are added up, i.e., power(4) + power(3) + power(1) = 10, is given as output.<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-02-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>