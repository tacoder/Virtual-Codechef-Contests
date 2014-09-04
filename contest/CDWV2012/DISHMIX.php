<?php require("../../includes/header.php"); ?><h1>Mixing the Ingredients</h1><div class="content">

<p>Papa Smurf is trying his hands on a new type of dish named IngrediMix. The process of preparation of this dish requires <b>N</b> ingredients (namely <b>a<sub>0</sub>, a<sub>1</sub>, a<sub>2</sub>,... a<sub>N-1</sub></b>) to be mixed together in one bowl. Every ingredients has a nutritional value (<b>v<sub>0</sub>, v<sub>1</sub>, ..., v<sub>N-1</sub></b>) associated with it.</p>
<p>The process of creation of dish continues until we have all ingredients mixed in one single bowl. In each step, we follow <b>any</b> one of the following steps</p>
<p>a) Select one of the unselected ingredient, <b>a<sub>r</sub></b>, and put it in a new bowl. The nutritional value of this bowl will be <b>v<sub>r</sub></b>.</p>
<p>b) Select one of the unselected ingredient, <b>a<sub>r</sub></b>, and put it in a bowl already containing ingredient a<sub>r-1</sub> (or a<sub>r+1</sub>). If the ingredient <b>a<sub>r</sub></b> and <b>a<sub>r-1</sub></b> (or <b>a<sub>r+1</sub></b>) has additive binding, then the nutritional value of the bowl <b>is increased by</b> <b>v<sub>r</sub></b>. If they have multiplicative binding, then the nutritional value of the bowl <b>is increased by the factor of </b><b>v<sub>r</sub></b>.</p>
<p>c) Select any two bowls A and B, such that if Bowl A has ingredient <b>a<sub>r</sub></b>, then Bowl B must have ingredient <b>a<sub>r-1</sub></b> (or <b>a<sub>r+1</sub></b>). Merge Bowl B into Bowl A. If the ingredient <b>a<sub>r</sub></b> and <b>a<sub>r-1</sub></b> (or <b>a<sub>r+1</sub></b>) has additive binding, then the nutritional value of the bowl A <b>is increased by</b> the nutritional value of bowl B. If they have multiplicative binding relation, then the nutritional value of the bowl A <b>is increased by the factor of</b> nutritional value of bowl B.</p>
<p>Papa Smurf wants to mix the ingredients in such a manner such that the final dish has <b>maximum nutritional value</b>. Help him.</p>
<h3>Input</h3>
<p>The first line of input contains a single number, <b>T</b>, number of test cases. Then <b>T</b> test cases follow. The first line of each test case contains an integer <b>N</b>, total number of ingredients. Then in second line, we have <b>N</b> space separated integers (<b>v<sub>0</sub>, v<sub>1</sub>,..., v<sub>N-1</sub></b>) representing the nutritional value of ingredients. In third line we have a string S containing <b>N</b>-1 characters, representing the binding relation between ingredients. If <b>S[i]</b> = '<b>a</b>' then, there is an additive binding relation between ingredient <b>a<sub>i</sub></b> and <b>a<sub>i+1</sub></b>. If <b>S[i]</b> = '<b>m</b>', then we have a multiplicative binding relation between ingredients <b>a<sub>i</sub></b> and <b>a<sub>i+1</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, find the maximum nutritional value Papa Smurf can get for his dish. As this number can be very large, print the <b>answer modulo 1000000007</b> (10^9 + 7).</p>
<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 10</p>
<p>2 ≤ <b>N</b> ≤ 10^5</p>
<p>1 ≤ <b>a<sub>i</sub></b> ≤ 10^5</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
5
1 2 3 4 5
amam

<b>Output:</b>
105

</pre><h3>Explanation</h3>
<p>The following procedure describes the mixing process to be adopted by the Papa Smurf.<br/></br/></p>
<p>1. Ingredient a<sub>0</sub> (v<sub>0</sub> = 1) is taken in bowl A. Ingredient a<sub>1</sub> (v<sub>1</sub> = 2) is added to it to yield a mixture having nutritional value 3 since the binding is additive in nature.<br/></br/></p>
<p>2. Ingredient a<sub>2</sub> (v<sub>2</sub> = 3) is taken in bowl B. Ingredient a<sub>3</sub> (v<sub>3</sub> = 4) is added to it to yield a mixture having nutritional value 7 since the binding is additive in nature.<br/></br/></p>
<p>3. Now ingredient a<sub>4</sub> (v<sub>4</sub> = 5) is added to bowl B and the nutritional value of this bowl changes to 35 as a<sub>3</sub> and a<sub>4</sub> has multiplicative binding relation.<br/></br/></p>
<p>4. Now the mixture in bowl B is added to the mixture in bowl A to get a final mixture, having nutritional value of 105. As bowl B has ingredient a<sub>2</sub> and bowl A has ingredient a<sub>1</sub>, and they have a multiplicative biding, the nutritional values of both bowls are multiplied.<br/></br/></p>
<p>5. Dish preparation process stops as bowl A has all ingredient and it can be easily verified that this is the highest nutritional value possible with the given order of ingredients.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kumarvimal">kumarvimal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-11-2012</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>